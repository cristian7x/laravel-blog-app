@extends('layouts.app')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-8">
			<a href="/posts" class="btn btn-link">Go Back</a>
			<div class="card shadow">
				<img src="/storage/cover_images/{{$post->cover_image}}" class="card-img-top" alt="post image">
				<div class="card-body">
					<h2 class="card-title">{{ $post->title }}</h2>
					{{-- {!! not parse the html !!} --}}
					<p class="card-text">{!! $post->body !!}</p>
					<small class="text-muted">Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
					<div class="d-flex justify-content-between align-items-center mt-2">
		        @auth
							@if(Auth::user()->id == $post->user_id)
								<div class="btn-group" role="group" aria-label="Options">
									<a class="btn btn-sm btn-outline-primary" href="/posts/{{ $post->id }}/edit">Edit</a>
									{!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
										{{ Form::hidden('_method', 'DELETE') }}
										{{ Form::submit('Delete', ['class' => 'btn btn-sm btn-outline-danger'])}}
									{!! Form::close() !!}
								</div>
							@endif
						@endauth
		      </div>	
				</div>
			</div>
		</div>
	</div>
@endsection