@extends('layouts.master')

	@section('title')
		<h1>ALL MOVIES</h1>
	@endsection

	@section('content')
		<div class="blog-post">
			<ul>
				@foreach($movies as $movie)
				<li class="list-unstyled">
					<h1 class="blog-post-title">{{ $movie->title }}</h1>
					<p>{{ substr($movie->storyline, 0, 100) }}...</p>
				</li>
				@endforeach
			</ul>
        </div>

	@endsection