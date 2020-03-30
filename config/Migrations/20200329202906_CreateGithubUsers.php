<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateGithubUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('github_users');
        $table->addColumn('login', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('avatar', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('type', 'integer', [
            'default' => 1,
            'limit' => 10,
            'null' => true,
        ]);
        $table->addColumn('site_admin', 'boolean', [
            'default' => false,
            'null' => true,
        ]);
        $table->addColumn('company', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('blog', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('location', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('since', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('active', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addIndex([
            'login',

            ], [
            'name' => 'LOGIN_INDEX',
            'unique' => true,
        ]);
        $table->addIndex([
            'type',

            ], [
            'name' => 'TYPE_INDEX',
            'unique' => false,
        ]);
        $table->addIndex([
            'site_admin',

            ], [
            'name' => 'SITE_ADMIN_INDEX',
            'unique' => false,
        ]);
        $table->addIndex([
            'active',

            ], [
            'name' => 'ACTIVE_INDEX',
            'unique' => false,
        ]);
        $table->create();
    }
}
