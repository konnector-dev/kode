<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddGithubUseridToTokens extends AbstractMigration
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
        $table = $this->table('tokens');
        $table->addColumn('github_user_id', 'integer', [
            'default' => 0,
            'limit' => 11,
            'null' => true,
        ]);
        $table->update();
    }
}
