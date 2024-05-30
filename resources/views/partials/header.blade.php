<header class="bg-white">
    <div class="container d-flex justify-content-between mt-3 mb-3">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo">
        <ul class="d-flex align-items-center list-unstyled gap-3">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('comics.index') }}">Comics</a></li>
            <li><a href="{{ route('comics.create') }}">Create Comic</a></li>
        </ul>
    </div>
</header>