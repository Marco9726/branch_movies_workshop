
@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 py-3">
			<div class="d-flex justify-content-between align-items-center">
				<h1>{{ $movie['title']}}</h1>
				<a href="{{ route('movies.index') }}" class="btn btn-primary">Torna all'elenco</a>
			</div>
		</div>
		<table class="table">
			<tbody>
				<tr>
					<th>Titolo originale</th>
					<td>{{ $movie['original_title'] }}</td>
				</tr>
				<tr>
					<th>Nazionalità</th>
					<td>{{ $movie['nationality'] }}</td>
				</tr>
				<tr>
					<th>Data di uscita</th>
					<td>{{ $movie['release_date'] }}</td>
				</tr>
				<tr>
					<th>Voto</th>
					<td>{{ $movie['vote'] }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@endsection
