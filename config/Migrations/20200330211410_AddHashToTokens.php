<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddHashToTokens extends AbstractMigration
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
        $table->addColumn('hash', 'uuid', [
            'default' => null,
            'null' => true,
        ]);
        $table->addIndex([
            'hash',
        
            ], [
            'name' => 'HASH_INDEX',
            'unique' => false,
        ]);
        $table->update();
    }
}
