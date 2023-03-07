<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['Fantasy', 'Comedy', 'Action', 'Adventure', 'Crime and mystery'];
        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->name = $genre;
            $newGenre->slug = Str::slug($newGenre->name, '-');
            $newGenre->save();
        }
    }
}
