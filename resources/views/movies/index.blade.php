@extends('layouts.master')

	@section('title')
		ALL MOVIES
	@endsection

	@section('content')
		<div class="blog-post">
			<ul>
				@foreach($movies as $movie)
				<li class="list-unstyled">
					<a href="{{ route('single-movie', ['id' => $movie->id]) }}" class="blog-post-title">{{ $movie->title }}</a>
					<p>{{ substr($movie->storyline, 0, 100) }}...</p>
				</li>
				@endforeach
			</ul>
        </div>

	@endsection