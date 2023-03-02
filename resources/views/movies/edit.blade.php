@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 text-center my-3">
               <h4>Modifica il film</h4>
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-6">
                <div class="container" >
                    <div class="row">
                        <div class="col">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger my-3">
                                    <ul class="list-unstyled mb-0">
                                        <li>{{$error}}</li>
                                    </ul>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <form class="p-3" action="{{route('movies.update', $movie->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Titolo</p></label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo" value="{{old('title') ?? $movie->title}}">   
                    </div>
                        <label for="floatingTextarea2"><p class="fw-semibold">Titolo Originale</p></label>
                        <input type="text" name="original_title" class="form-control" placeholder="Inserisci il Titolo Originale" value="{{old('original_title') ?? $movie->original_title}}">
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Nazionalità</p></label>
                        <input type="text" name="thumb" class="form-control" placeholder="Inserisci la nazionalità" value="{{old('nationality') ?? $movie->nationality}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Data di Uscita</p></label>
                        <input type="text" name="release_date" class="form-control" placeholder="Inserisci la Data di Uscita" value="{{old('release_date') ?? $movie->release_date}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Voto</p></label>
                        <input type="number" name="vote" class="form-control" placeholder="Inserisci il Voto" value="{{old('vote') ?? $movie->vote}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Cast</p></label>
                        <input type="text" name="cast" class="form-control" placeholder="Inserisci il Cast" value="{{old('cast') ?? $movie->cast}}">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Thumb</p></label>
                        <input type="text" name="cover_path" class="form-control" placeholder="Inserisci la Thumbnail" value="{{old('cover_path') ?? $movie->cover_path}}">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection