<?php

namespace App\Test\TestCase\Controller;

use App\Controller\PagesController;
use Cake\Core\App;
use Cake\Core\Configure;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\TestSuite\IntegrationTestCase;
use Cake\View\Exception\MissingTemplateException;

class KoderviewLoginTest extends IntegrationTestCase {

    /**
     * testKoderViewLogin method
     *
     * @return void
     */
    public function testHomepage() {
        $this->get('/login');
        $this->assertResponseOk();
        $this->assertResponseContains('koderview');
        $this->assertResponseContains('Login');
    }

}
