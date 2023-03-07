@extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6 text-center my-3">
               <h4>Aggiungi un Nuovo Film</h4>
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
                <form class="p-3" action="{{route('movies.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Titolo</p></label>
                        <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">   
                         @error('title')
                            <div>
                                <p>{{$message}}</p>
                            </div>
                        @enderror
                    </div>
                        <label for="floatingTextarea2"><p class="fw-semibold">Titolo Originale</p></label>
                        <input type="text" name="original_title" class="form-control" placeholder="Inserisci il Titolo Originale">
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Nazionalità</p></label>
                        <input type="text" name="nationality" class="form-control" placeholder="Inserisci la nazionalità">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Data di Uscita</p></label>
                        <input type="text" name="release_date" class="form-control" placeholder="Inserisci la Data di Uscita">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Voto</p></label>
                        <input type="number" name="vote" class="form-control" placeholder="Inserisci il Voto">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Cast</p></label>
                        <input type="text" name="cast" class="form-control" placeholder="Inserisci il Cast">
                    </div>
                    <div class="form-group">
                        <label class="control-label"><p class="fw-semibold">Thumb</p></label>
                        <input type="text" name="cover_path" class="form-control" placeholder="Inserisci la Thumbnail">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success" class="form-control" >Salva le Modifiche</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection