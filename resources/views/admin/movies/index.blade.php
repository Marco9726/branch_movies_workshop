@extends('layouts.admin')

@section('content')
<div class="container-fluid">   
    <div class="row">
        <div class="col">
            <h1>Lista dei Movies</h1>
        </div>   
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end my-2">
                <a class="btn btn-primary " href="{{route('movies.create')}}">Aggiungi un Nuovo Film</a>
            </div>
        </div>   
    </div>  
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr class="text-uppercase">
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">original title</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Release date</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Cast</th>
                    <th scope="col">cover Path</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <th scope="row">{{ $movie->id }}</th>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->original_title }}</td>
                            <td>{{ $movie->nationality }}</td>
                            <td>{{ $movie->release_date }}</td>
                            <td>{{ $movie->vote }}</td>
                            <td>{{ $movie->cast }}</td>
                            <td class="p-0"><img class="w-25" src="{{ $movie->cover_path }}" alt=""></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a title="Visualizza" class="btn btn-square btn-sm py-2 btn-primary" href="{{ route('movies.show', $movie->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    <a title="Modifica" class="btn btn-square btn-sm py-2 btn-warning" href="{{ route('movies.edit', $movie->id) }}"><i class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('movies.destroy', $movie->id)}}" method="POST" style="margin-block-end: 0em;" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button title="Elimina" class="btn btn-square btn-sm py-2 btn-danger" type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </div>   
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection