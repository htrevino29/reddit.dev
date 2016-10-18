
@extends('layouts.master')

@section('content')

<div class='container'>	

	<div class='col-sm-12'>
		<h1 class='postsh1'>Posts</h1>
		<div>
			@foreach($posts as $post)
				<div class='posts'>
					<tr class='title'><h4>{{$post->title}}</h4></t>
					<td class='url'>{{$post->url}}</td>
					<br>					
					<td class='created'>Submitted {{ $post->created_at}}</td>
					<td class='username'>By {{$post->user->name}}</td>
					</tr>					
				</div>	
			@endforeach 
				<span class='pagination'>{!! $posts->render() !!}</span> {{-- renders pagination --}}
		</div>
	</div>
  	<div class="col-sm-3">
    	<div class="input-group">
	      	<input type="text" class="form-control" placeholder="find stuffs">
	      	<span class="input-group-btn">
	       	<button class="btn btn-primary" type="button">Search</button>
	      	</span>   	
    	</div><!-- /input-group -->
    

  	</div><!-- /.col-lg-6 -->
</div>

@stop