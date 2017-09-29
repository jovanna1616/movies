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

        @if(count($movie->comments))
	        <hr/>
	        <h4>Comments:</h4>
	        <ul class="list-unstyled">
	            @foreach($movie->comments as $comment)
	                <li>
	                    <p>
	                        <strong>Comment:</strong> {{ $comment->content }}
	                    </p>
	                    <p>
	                        created at: {{ $comment->created_at->diffForHumans() }}
	                    </p>
	                </li>
	            @endforeach
	        </ul>
		@endif
	@endsection