<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\ServerRequest;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function dashboard() {
        //$orgs = (new OauthGithubController())->
        $this->viewBuilder()->setLayout('dashboard');
    }

    public function githubCallback() {
        pr($this->request->getQueryParams());
        $this->updateAccessToken();
        die;
    }

    public function logout() {
        return $this->redirect('/login');
    }

    private function updateAccessToken() {
        $this->request->getQueryParams();
    }
}
