@extends('layouts.app')

@section('page-name', 'Lista degli artisti')



@section('main_content')

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">author</th>
            <th scope="col">title</th>
            <th scope="col">album</th>
            <th scope="col">length</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($artists as $artist)
        <tr>
            <th scope="row">{{ $artist->id }}</th>
            <td>{{ $artist->author }}</td>
            <td>{{ $artist->title }}</td>
            <td>{{ $artist->album }}</td>
            <td>{{ $artist->length }}</td>
            <td><a href="{{ route('artists.show', ['artist' => $artist]) }}"> dettaglio</a></td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection