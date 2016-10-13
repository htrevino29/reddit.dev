@extends('layouts.master')

@section('content')
		<div class="container">
			<h1>Edit Post</h1>

			<form class="form" method="POST" action="{{ action('PostsController@update', $post->id) }}">
				{!! csrf_field() !!}
				{!! method_field('PUT')!!}

				<h4>Title</h4> <input class="form-control" type="text" name="title" value="{{ (old('title') == null) ? $post->title : old('title') }}">

				<br>

				<h4>Url</h4> <input class="form-control" type="text" name="url" value="{{ (old('url') == null) ? $post->title : old('url') }}">

				<br>
				<h4>Content</h4>
				<textarea class='form-control' rows='3' name="content">{{ (old('content') == null) ? $post->content : old('content')}}</textarea>

				<br>

				<button class="btn-success btn" type="submit">SUBMIT</button>
			</form>
		</div>
	
@stop