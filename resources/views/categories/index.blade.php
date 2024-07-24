@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categoria</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Añadir Categoria</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            {{ $message }}
        </div>
    @endif
    <table class="table mt-3">
        <tr>
            <th>Nombre</th>
            <th>Accion</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
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
