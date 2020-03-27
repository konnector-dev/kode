<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Login;
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
    private Login $login;

    public function dashboard()
    {
        //$orgs = (new OauthGithubController())->
        $this->viewBuilder()->setLayout('dashboard');
    }

    public function githubCallback()
    {
        if (!$this->isTokenActive()) {
            $this->updateAccessToken();
        }
        if($this->saveLogin()) {
            $this->redirect('/dashboard?token='.$this->login->hash);
        }
        $this->redirect('/login');
    }

    public function logout()
    {
        return $this->redirect('/login');
    }

    private function isTokenActive()
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

    private function updateAccessToken()
    {
        $tokenTable = TableRegistry::getTableLocator()->get('Tokens');
        $this->token = $tokenTable->newEmptyEntity();

        $this->token->source_id = $this->sources['github'];
        $this->token->access_token = $this->request->getQueryParams()['access_token'];
        $this->token->last_active = date('Y-m-d H:i:s');
        $this->token->created = date('Y-m-d H:i:s');

        if($tokenTable->save($this->token)) {
            return true;
        }
        return false;
    }

    private function saveLogin() {
        $loginTable = TableRegistry::getTableLocator()->get('Logins');
        $this->login = $loginTable->newEmptyEntity();

        $this->login->source_id = $this->sources['github'];
        $this->login->token_id = $this->token->id;
        $this->login->hash = Text::uuid();
        $this->login->ip_source = $_SERVER['REMOTE_ADDR'];
        $this->login->ip_destination = $_SERVER['SERVER_ADDR'];
        $this->login->created = date('Y-m-d H:i:s');

        if($loginTable->save($this->login)) {
            return true;
        }
        return false;
    }
}
