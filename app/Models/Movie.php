<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Movie extends Model
{

	protected $fillable = ['title', 'original_title', 'nationality', 'release_date', 'vote', 'cast', 'cover_path', 'genre_id'];
	use HasFactory;
	public function genre()
	{
		return $this->belongsTo(Genre::class);
	}
}
