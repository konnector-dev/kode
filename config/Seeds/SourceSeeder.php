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
                'slug'    => 'github',
                'status'    => true
            ],
            [
                'name'    => 'BitBucket',
                'slug'    => 'bitbucket',
                'status'    => false
            ]
        ];

        $posts = $this->table('sources');
        $posts->insert($data)
            ->saveData();
    }
}
