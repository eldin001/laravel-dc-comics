@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')
<main class="edit">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
    <h1>Edit Comic</h1>
        @csrf
        @method('PUT')
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $comic->title }}" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $comic->description }}</textarea>

        <label for="thumb">Thumbnail URL:</label>
        <input type="url" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ $comic->price }}" required>

        <label for="series">Series:</label>
        <input type="text" id="series" name="series" value="{{ $comic->series }}" required>

        <label for="sale_date">Sale Date:</label>
        <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type" value="{{ $comic->type }}" required>

        <button type="submit">Update</button>
    </form>
</main>
@endsection
