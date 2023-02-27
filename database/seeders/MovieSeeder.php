<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$movies = config('movies');

		foreach ($movies as $movie) {

			$new_movie = new Movie();

			$new_movie->title = $movie['title'];
			$new_movie->original_title = $movie['original_title'];
			$new_movie->nationality = $movie['nationality'];
			$new_movie->release_date = $movie['release_date'];
			$new_movie->vote = $movie['vote'];
			$new_movie->cast = $movie['cast'];
			$new_movie->cover_path = $movie['cover_path'];

			$new_movie->save();
		}
	}
}
