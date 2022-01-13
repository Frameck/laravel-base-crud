<?php

use Illuminate\Database\Seeder;
use App\Comic;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 7; $i++) { 
            $newComic = new Comic();
            $newComic->title = 'Titolo comic n°' . $i;
            $newComic->description = 'Descrizione casuale del fumetto';
            $newComic->thumb = 'https://picsum.photos/seed/picsum/200/300';
            $newComic->price = 9.99 * $i;
            $newComic->series = 'Serie di fumetti' . $i;
            $newComic->sale_date = date('Y-m-d');
            $newComic->type = ($i % 2 === 0) ? 'comic book' : 'graphic novel';

            $newComic->save();
        }
        // foreach ($comics as $comic) {
        //     DB::table('comics')->insert($comic);
        // }
    }
}
