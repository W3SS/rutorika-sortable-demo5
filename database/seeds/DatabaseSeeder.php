<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('ArticlesSeeder');
        $this->call('TagsSeeder');
        $this->call('PostsSeeder');
        $this->call('MorphableSeeder');
    }

}
