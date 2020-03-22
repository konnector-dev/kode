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
}
