@extends('layouts.master')

@section('content')
	<div class="container">
	<h1>Create Post</h1>

	<form class="form" method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}

		<h5>Title</h5> <input class="form-control" type="text" name="title" value="{{ old('title') }}">
			@if($errors->has('title')) 
				<span class="help-block">{{$errors->first('title')}}</span>
			@endif
		<br>

		<h5>Url</h5> <input class="form-control" type="text" name="url" value="{{ old('url') }}">
			@if($errors->has('url')) 
				<span class="help-block">{{$errors->first('url')}}</span>
			@endif
		<br>

		<h5>Content</h5>
		<textarea class='form-control' row='3' name="content">{{ old('content')}}</textarea>

			@if($errors->has('url')) 
				<span class="help-block">{{$errors->first('content')}}</span>
			@endif
		<br>
		<button class="btn-success btn" type="submit">SUBMIT</button>
	</form>

	</div>
@stop