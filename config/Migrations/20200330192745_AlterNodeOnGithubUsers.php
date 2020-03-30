<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterNodeOnGithubUsers extends AbstractMigration
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
        $table->changeColumn('node', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addIndex([
            'node',
        
            ], [
            'name' => 'NODE_INDEX',
            'unique' => false,
        ]);
        $table->update();
    }
}
