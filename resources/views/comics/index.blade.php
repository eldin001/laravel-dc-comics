@extends('layouts.app')

@section('title', 'Comics Index')

@section('content')
<main class="edit">
    <h1>All Comics</h1>
    <a href="{{ route('comics.create') }}">Create New Comic</a>
    <div class="comics-list">
        @foreach($comics as $comic)
            <div class="comic-item">
                <h2>{{ $comic->title }}</h2>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <a href="{{ route('comics.show', $comic->id) }}">View</a>
                <a href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</main>
@endsection
