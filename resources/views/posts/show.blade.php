@extends('layouts.master')

@section('content')
	<div class='container'>
		<h1> SHOW POST</h1>
		<h1>{{$post->title}}</h1>
		<p>{{$post->url}}</p>
		<p>{{$post->content}}</p>
		
	</div>

@stop
