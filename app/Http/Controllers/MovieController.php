<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		$movies = Movie::all();
		return view('movies.index', compact('movies'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{

		return view('movies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$form_data = $request->all();
		$new_movie = new Movie();
		$new_movie->fill($form_data);
		$new_movie->save();
		return redirect()->route('movies.index', ['movie' => $new_movie->id]);
	}


	public function show($id)
	{
		$movie = Movie::findOrFail($id);
		return view('movies.show', compact('movie'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */


	public function edit($id)
	{
		$movie = Movie::find($id);
		if ($movie) {
			$data = [
				'movie' => $movie
			];
			return view('movies.edit', $data);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{

		$movie = Movie::findOrFail($id);
		$form_data = $request->all();
		$movie->update($form_data);
		return redirect()->route('movies.show', ['movie' => $movie->id]);
	}



	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$movie = Movie::findOrFail($id);
		$movie->delete();
		return redirect()->route('movies.index');
	}
}
