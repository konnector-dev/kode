<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddHashToLogins extends AbstractMigration
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
        $table = $this->table('logins');
        $table->addColumn('hash', 'uuid', [
            'default' => null,
            'null' => true,
        ]);
        $table->update();
    }
}
