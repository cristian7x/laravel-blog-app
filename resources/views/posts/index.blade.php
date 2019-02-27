@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
	  <div class="container">
	    <h1 class="display-3">Welcome!</h1>
	    <p>RagnaBlog Laravel app!</p>
	    @guest
	    	<p>
	    		<a class="btn btn-sm btn-primary" href="/login" role="button">Login</a>
	    		<a class="btn btn-sm btn-success" href="/register" role="button">Register</a>
	    	</p>
	    @endguest
	  </div>
	</div>
	@if (count($posts) > 0)
		<div class="row">
			@foreach($posts as $post)
			<div class="col-sm-6 col-md-4">
        <div class="card mb-4 shadow-sm">
        	<img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="post image">
        	<div class="card-body">
						<h4 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
						<small class="text-muted">Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
					</div>
      	</div>
      </div>
			@endforeach
		</div>
		{{ $posts->links() 	}}	
	@else
		<p>No posts found!</p>
	@endif
@endsection