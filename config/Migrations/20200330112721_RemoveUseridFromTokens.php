<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RemoveUseridFromTokens extends AbstractMigration
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
        $table->removeColumn('user_id');
        $table->update();
    }
}
