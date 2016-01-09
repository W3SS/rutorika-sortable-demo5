<?php
use Illuminate\Database\Seeder;


class MorphableSeeder extends Seeder {
    public function run()
    {
        $countAuthors = 6;
        $countVideos = 10;
        $countAlbums = 10;

        DB::table('authorables')->delete();
        DB::table('authors')->delete();
        DB::table('albums')->delete();
        DB::table('videos')->delete();

        /** @var \Faker\Generator $faker */
        $faker = Faker\Factory::create();

        for ($i = 0; $i < $countAlbums; $i++) {

            $album = new \App\Album();
            $album->title = ucfirst($faker->sentence(2));
            $album->save();
        }

        for ($i = 0; $i < $countVideos; $i++) {
            $video = new \App\Video();
            $video->title = ucfirst($faker->sentence(2));
            $video->save();
        }

        $albumIds = \App\Album::lists('id');
        $videoIds = \App\Video::lists('id');

        for ($i = 0; $i < $countAuthors; $i++) {
            $author = new \App\Author();
            $author->name = $faker->name;
            $author->save();

            $authorAlbumIds = $faker->randomElements($albumIds, $faker->numberBetween(2, $countAlbums));
            $author->albums()->sync($authorAlbumIds);

            $authorVideoIds = $faker->randomElements($videoIds, $faker->numberBetween(2, $countVideos));
            $author->videos()->sync($authorVideoIds);
        }
    }
}