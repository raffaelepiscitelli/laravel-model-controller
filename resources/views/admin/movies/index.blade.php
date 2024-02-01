@extends('layouts.app')

@section('main-content')
<h1>Movies</h1>

<ul>
    @forelse ($movies as $movie)
    <div class="card mt-3" style="width: 18rem;">
        <div class="card-header">
            {{ $movie->title }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $movie->original_title }}</li>
            <li class="list-group-item">{{ $movie->date }}</li>
            <li class="list-group-item">{{ $movie->nationality }}</li>
            <li class="list-group-item">{{ $movie->vote }}</li>
        </ul>
    </div>
    @empty
    <li>
        <p>
            There are no available moviess at the moment.
        </p>
    </li>
    @endforelse
</ul>
@endsection