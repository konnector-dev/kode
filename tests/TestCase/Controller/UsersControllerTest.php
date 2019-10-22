<?php

namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\UsersController Test Case
 *
 * @uses \App\Controller\UsersController
 */
class UsersControllerTest extends TestCase {

    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
            //'app.Users'
    ];

    /**
     * Test login method
     *
     * @return void
     */
    public function testLogin() {
        $this->get('/login');
        $this->assertResponseOk();
        $this->assertResponseContains('koderview');
        $this->assertResponseContains('Login');
        $this->assertResponseContains('GitHub');
    }

}
