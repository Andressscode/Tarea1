@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movie: {{ $movie->title }}</h1>
    <p>Description: {{ $movie->description }}</p>
    <p>Category: {{ $movie->category->name }}</p>
</div>
@endsection
