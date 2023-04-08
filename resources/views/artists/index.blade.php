@extends('layouts.app')

@section('page-name', 'Lista degli artisti')



@section('main_content')


<a href="{{ route('artists.create') }}" role="button" class="btn btn-primary my-3">Aggiungi Artista</a>

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
            <td>
                <a href="{{ route('artists.show', ['artist' => $artist]) }}"> dettaglio</a>
                <a class=" ms-3" href="{{ route('artists.edit', $artist) }}">Modifica</a>
                <button type="button" class="btn btn-danger ms-3" data-bs-toggle="modal"
                    data-bs-target="#delete-modal-{{ $artist->id }}">
                    Elimina
                </button>
            </td>
        </tr>
        @endforeach
        @foreach ($artists as $artist)

        <div class="modal fade" id="delete-modal-{{ $artist->id }}" tabindex="-1"
            aria-labelledby="delete-modal-{{ $artist->id }}-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-modal-{{ $artist->id }}-label">Conferma eliminazione
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        Sei sicuro di voler eliminare l'artista {{ $artist->author }}
                        <br>
                        L'operazione non è reversibile
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                        <form action="{{ route('artists.destroy', $artist) }}" method="POST" class="">
                            @method('DELETE')
                            @csrf

                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>
</table>


@endsection