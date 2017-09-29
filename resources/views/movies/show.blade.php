@extends('layouts.master')

	@section('title')
		{{ $movie->title }}
	@endsection

	@section('content')
		<div class="blog-post">
			<h4>Movie Title: {{ $movie->title }}</h4>
			<a href="{{ route('movies-genre', ['genre' => $movie->genre]) }}">Genre: {{ $movie->genre }}</a>
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

		<h4>Post a comment:</h4>
        <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">

	        {{ csrf_field() }}

	        

	        <input type="hidden" name="movie_id" value="{{ $movie->id }}">

	        <div class="form-group">
	            <label for="text">Comment:</label>
	            <textarea class="form-control" id="content" name="content"></textarea>

	            @include(
		            'partials.error-messages', 
		            ['fieldTitle' => 'content']
	            )
	        </div>

	        <div class="form-group">
	            <button type="submit" class="btn btn-primary">Publish</button>
	        </div>

		</form>
	@endsection