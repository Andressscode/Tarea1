@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Peliculas</h1>
    <a href="{{ route('movies.create') }}" class="btn btn-primary">Añadir Pelicula</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif
    <table class="table mt-3">
        <tr>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Accion</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->category->name }}</td>
            <td>
                <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
