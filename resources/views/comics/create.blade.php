@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<main class="create">
    <form action="{{ route('comics.store') }}" method="POST">
    <h1>Create Comic</h1>
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" c>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>

        <label for="thumb">Thumbnail URL:</label>
        <input type="url" id="thumb" name="thumb" c>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" c>

        <label for="series">Series:</label>
        <input type="text" id="series" name="series" c>

        <label for="sale_date">Sale Date:</label>
        <input type="date" id="sale_date" name="sale_date" c>

        <label for="type">Type:</label>
        <input type="text" id="type" name="type"  >

        <button type="submit">Create</button>
    </form>
</main>
@endsection

