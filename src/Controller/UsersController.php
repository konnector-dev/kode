<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\GithubUser;
use App\Model\Entity\Token;
use Cake\ORM\TableRegistry;
use Cake\Utility\Text;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    private Token $token;
    private GithubUser $githubUser;

    public function dashboard()
    {
        $request = $this->request->getQueryParams();
        $this->set('token', $request['token']);
        $this->viewBuilder()->setLayout('dashboard');
    }

    public function frontend()
    {
        $this->viewBuilder()->setLayout('ajax');
    }

    public function githubCallback()
    {
        if (!$this->isGithubTokenActive()) {
            $this->updateGithubAccessToken();
        }
        if ($this->githubInfo() && $this->updateGithubUser()) {
            $this->redirect('/app/dashboard?token='.$this->token->hash);
        }
        $this->redirect('/login');
    }

    public function logout()
    {
        $tokensTable = TableRegistry::getTableLocator()->get('Tokens');
        $token = $tokensTable
            ->find()
            ->contain(['GithubUsers'])
            ->where([
                'hash' => $this->request->getHeader('Bearer')[0],
                'status' => true
            ])
            ->first();
        $token->status = false;
        $token->last_active = date('Y-m-d H:i:s');
        $logout = false;
        if ($tokensTable->save($token)) {
            $logout = true;
        }
        if (!$this->request->is('ajax')) {
            return $this->redirect('/login');
        }
        echo json_encode(['logout' => $logout]);
        die;
    }

    private function isGithubTokenActive()
    {
        $token = TableRegistry::getTableLocator()
            ->get('Tokens')
            ->find()
            ->where([
                'access_token' => $this->request->getQueryParams()['access_token'],
                'status' => true
            ])
            ->first();
        if ($token) {
            $this->token = $token;
            return true;
        }
        return false;
    }

    private function updateGithubAccessToken()
    {
        $tokenTable = TableRegistry::getTableLocator()->get('Tokens');
        $this->token = $tokenTable->newEmptyEntity();

        $this->token->source_id = $this->sources['github'];
        $this->token->user_id = 0;
        $this->token->access_token = $this->request->getQueryParams()['access_token'];
        $this->token->last_active = date('Y-m-d H:i:s');
        $this->token->created = date('Y-m-d H:i:s');

        if ($tokenTable->save($this->token)) {
            return true;
        }
        return false;
    }

    private function githubInfo()
    {
        $userInfo = json_decode((new OauthGithubController())->getUserInfo($this->token->access_token));

        $githubUserTable = TableRegistry::getTableLocator()->get('GithubUsers');
        $githubUser = $githubUserTable->newEmptyEntity();

        $githubUser->node = $userInfo->node_id;
        if ($this->githubUser = $githubUserTable->findOrCreate(
            ['node' => $githubUser->node],
            function ($entity) use ($userInfo) {
                // Create, only if node not found
                $entity->name = $userInfo->name;
                $entity->login = $userInfo->login;
                $entity->avatar = $userInfo->avatar_url;
                $entity->type = ($userInfo->type === 'User' ? 1 : 2);
                $entity->site_admin = $userInfo->site_admin;
                $entity->company = $userInfo->company;
                $entity->blog = $userInfo->blog;
                $entity->location = $userInfo->location;
                $entity->since = date('Y-m-d H:i:s', strtotime($userInfo->created_at));
                $entity->active = true;
                $entity->gitid = $userInfo->id;
                $entity->created = date('Y-m-d H:i:s');
            }
        )) {
            return true;
        }
        return false;
    }

    private function updateGithubUser()
    {
        $tokensTable = TableRegistry::getTableLocator()->get('Tokens');
        $this->token->github_user_id = $this->githubUser->id;
        $this->token->hash = Text::uuid();
        if ($tokensTable->save($this->token)) {
            return true;
        }
        return false;
    }

    public function info()
    {
        $tokenUser = TableRegistry::getTableLocator()
            ->get('Tokens')
            ->find()
            ->contain(['GithubUsers'])
            ->where([
                'hash' => $this->request->getHeader('Bearer')[0],
                'status' => true
            ])
            ->first();
        $user = [];
        $user['login'] = $tokenUser->github_user->login;
        $user['name'] = $tokenUser->github_user->name;
        $user['avatar'] = $tokenUser->github_user->avatar;
        $this->viewBuilder()->setLayout('ajax');
        echo json_encode($user);
        die;
    }
}
