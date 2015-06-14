<?php
use Illuminate\Database\Seeder;


class TagsSeeder extends Seeder {
    public function run()
    {
        $count = 20;

        DB::table('tags')->delete();

        /** @var \Faker\Generator $faker */
        $faker = Faker\Factory::create();

        for ($i = 0; $i < $count; $i++) {
            $tag = new \App\Tag();
            $tag->title = $faker->word;
            $tag->save();
        }
    }
}