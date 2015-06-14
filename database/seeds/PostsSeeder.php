<?php
use Illuminate\Database\Seeder;


class PostsSeeder extends Seeder {
    public function run()
    {
        $count = 5;

        DB::table('posts')->delete();

        /** @var \Faker\Generator $faker */
        $faker = Faker\Factory::create();

        $tagIds = \App\Tag::lists('id');

        for ($i = 0; $i < $count; $i++) {
            $post = new \App\Post();
            $post->title = $faker->sentence(2);
            $post->description = $faker->paragraph();
            $post->save();


            $postTagIds = $faker->randomElements($tagIds, $faker->numberBetween(0, 10));
            $post->tags()->sync($postTagIds);

        }
    }
}