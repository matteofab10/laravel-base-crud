<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Str;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {

            $new_comic = new Comic();

            $new_comic->image = $comic['thumb'];
            $new_comic->title = $comic['title'];
            $new_comic->series = $comic['series'];
            $new_comic->type = $comic['type'];
            $new_comic->price = $comic['price'];
            $new_comic->description = $comic['description'];
            $new_comic->slug = Str::slug($new_comic->title, '-');


            $new_comic->save();

        }

    }
}
