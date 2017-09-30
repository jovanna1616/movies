@extends('layouts.master')

	@section('title')
		All {{ basename($_SERVER['PATH_INFO']) }} movies:
	@endsection

	@section('content')
		<div class="blog-post">
			<ul>
				@foreach($movies as $movie)
				<li class="list-unstyled">
					<h1 class="blog-post-title">{{ $movie->title }}</h1>
					<p>{{ $movie->storyline }}</p>
				</li>
				@endforeach
			</ul>
        </div>

	@endsection