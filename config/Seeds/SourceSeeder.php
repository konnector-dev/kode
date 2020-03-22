<?php


use Phinx\Seed\AbstractSeed;

class SourceSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'name'    => 'GitHub',
                'status'    => true
            ],
            [
                'name'    => 'BitBucker',
                'status'    => false
            ]
        ];

        $posts = $this->table('sources');
        $posts->insert($data)
            ->saveData();
    }
}
