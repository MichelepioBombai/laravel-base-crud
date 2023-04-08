@extends('layouts.app')

@section('page-name', 'aggiungi artista')

@section('main_content')

<form action="{{ route('artists.store') }}" method="POST">
    @csrf

    <label for="name" class="form-label">Nome</label>
    <input type="text" class="form-control" id="name" name="name" />

    <label for="number" class="form-label">titolo traccia</label>
    <input type="text" class="form-control" id="number" name="number" />

    <label for="name" class="form-label">Nome album</label>
    <input type="text" class="form-control" id="name" name="name" />

    <label for="weight" class="form-label">durata della traccia</label>
    <input type="text" class="form-control" id="weight" name="weight" />

    <button type="submit" class="btn btn-primary my-3">Salva</button>
</form>



@endsection