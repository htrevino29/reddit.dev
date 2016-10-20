@extends('layouts.master')

@section('content')
	<div='container'>
		<h1> {{ Auth::user()->name }} </h1>
		<p> {{ Auth::user()->email }} </p>


		<button type="submit" class="btn-success btn"><a href="{{ action('UsersController@edit', Auth::user()->id) }}">EDIT ACCOUNT</a></button>

	@foreach(Auth::user()->posts as $post) 
		<div class="posts">
			<tr>
				<div>
					
					<h4><td>{{ Auth::user()->title }}</td></h4>
				</div>
				<div>
					<h4><td>{{ $post->content }}</td></h4>
				</div>
				<div>
					<h4><td>{{ $post->url }}</td></h4>
				</div>
				<div>
					<a href="{{ action('PostsController@show', $post->id) }}">See Post</a>
					<p>{{ $post->created_at->diffForHumans() }}</p>
					<button type="submit" class="btn-success btn"><a href="{{ action('PostsController@edit', $post->id) }}">EDIT POST</a></button>
				<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					<button type="submit" class="btn-success btn">DELETE</button>
				</form>
				</div>
			</tr>

		</div>
	@endforeach

	</div>
@stop
