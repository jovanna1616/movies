@extends('layouts.master')

	@section('title')

		Create new movie

	@endsection


	@section('content')

		<form method="POST" action="{{ route('movies-store') }}">

	        {{ csrf_field() }}

	        <div class="form-group">

	            <label for="title">Movie title:</label>

	            <input type="text" class="form-control" id="title" name="title" required />

	            @include(
	                'partials.error-messages',
	                ['fieldTitle' => 'title']
            	)

	        </div>
	        <div class="form-group">

	            <label for="title">Genre:</label>

	            <input type="text" class="form-control" id="genre" name="genre" required />

	            @include(
	                'partials.error-messages',
	                ['fieldTitle' => 'genre']
            	)

	        </div>
	        <div class="form-group">

	            <label for="title">Director:</label>

	            <input type="text" class="form-control" id="director" name="director" required/>

	        </div>
	        <div class="form-group">

	            <label for="title">Year:</label>

	            <input type="number" class="form-control" id="year" name="year" required/>

	            @include(
	                'partials.error-messages',
	                ['fieldTitle' => (int)'year']
            	)

	        </div>

	        <div class="form-group">

	            <label for="body">Storyline:</label>

	            <textarea class="form-control" id="storyline" name="storyline" required></textarea>

	            @include(
	                'partials.error-messages',
	                ['fieldTitle' => 'storyline']
            	)

	        </div>

	        <div class="form-group">

	            <button type="submit" class="btn btn-primary">Create movie</button>

	        </div>

	    </form>

	@endsection