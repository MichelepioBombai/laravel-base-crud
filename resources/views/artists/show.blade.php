@extends('layouts.app')

@section('page-name', 'dettaglio artista: '. $artist->author)



@section('main_content')


<strong>autore: </strong> {{ $artist->author }} <br />
<img src="{{ $artist->poster }}"><br />
<strong>titolo della canzone: </strong> {{ $artist->title }} <br />
<strong>nome album: </strong> {{ $artist->album }} <br />
<strong>durata della canzone: </strong> {{ $artist->length }} <br />

@endsection