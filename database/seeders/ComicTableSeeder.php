<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');

        foreach ($comics_array as $comic_item) {
            $comic = new Comic();
            $comic->title = $comic_item['title'];
            $comic->description =$comic_item['description'];
            $comic->price = $comic_item['price'];
            $comic->type = $comic_item['type'];
            $comic->thumb =$comic_item['thumb'];
            $comic->sale_date =$comic_item['sale_date'];
            $comic->series = $comic_item['series'];
        }
    }
}
