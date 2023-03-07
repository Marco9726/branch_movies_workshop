@extends('layouts.admin')

@section('content')
<div class="container-fluid">   
    <div class="row">
        <div class="col">
            <h1>Lista dei Generi</h1>
        </div>   
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-end my-2">
                <a class="btn btn-primary " href="{{route('admin.genres.create')}}">Aggiungi un Nuovo Genere</a>
            </div>
        </div>   
    </div>  
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                  <tr class="text-uppercase">
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Slug</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($genres as $genre)
                        <tr>
                            <td>{{ $genre->id }}</td>
                            <td>{{ $genre->name }}</td>
                            <td>{{ $genre->slug}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a title="Visualizza" class="btn btn-square btn-sm py-2 btn-primary" href="{{ route('admin.genres.show', $genre->id) }}"><i class="fa-solid fa-eye"></i></a>
                                    <a title="Modifica" class="btn btn-square btn-sm py-2 btn-warning" href="{{ route('admin.genres.edit', $genre->id) }}"><i class="fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('genres.destroy', $genre->id)}}" method="POST" style="margin-block-end: 0em;" class="d-inline-block">
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