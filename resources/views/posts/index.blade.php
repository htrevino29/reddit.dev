@extends('layouts.master')

@section('content')
<div class='container'>
	<h1>Posts</h1>
		<div>
			@foreach($posts as $post)
			<div>
				<tr><h4>{{$post->title}}</h4></tr>
								
					<td>{{$post->url}}</td>
				<br>
					<td>{{$post->content}}</td>	
					<td><h5>Posted</h5><h6> {{ $post->created_at->format('l, jS F Y') }}</h6>
				</tr>
				<br>
			</div>	
			@endforeach 
		
		{!! $posts->render() !!} {{-- renders pagination --}}
	
		</div>
</div>
@stop