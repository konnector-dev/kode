<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AlterGitidOnGithubUsers extends AbstractMigration
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
        $table->changeColumn('gitid', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addIndex([
            'gitid',
        
            ], [
            'name' => 'GITHUB_ID_INDEX',
            'unique' => false,
        ]);
        $table->update();
    }
}
