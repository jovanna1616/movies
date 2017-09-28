@extends('layouts.master')

	@section('title')
		<h1>{{ $movie->title }}</h1>
	@endsection

	@section('content')
		<div class="blog-post">
			<h4>Movie Title: {{ $movie->title }}</h4>
			<h5>Genre: {{ $movie->genre }}</h5>
			<h5>Director: {{ $movie->director }}</h5>
			<h5>Year of publishing: {{ $movie->year }}</h5>
			<hr>
			<p><strong>About film: </strong>{{ $movie->storyline }}</p>
        </div>
	@endsection