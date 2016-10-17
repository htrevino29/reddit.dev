@extends('layouts.master')

@section('content')

<div class='container'>		


	<div class='col-sm-9'>
	<h1>Posts</h1>
		<div>
			@foreach($posts as $post)
				<div>
					<tr><h4>{{$post->title}}</h4></tr>
									
						<td>{{$post->url}}</td>
					<br>
						<td>{{$post->content}}</td>	
					<br>
						{{-- <td><h5>Posted</h5><h6> {{ $post->created_at->format('l, jS F Y') }}</h6></td> --}}
						<td>{{ $post->created_at}}</td>
					</tr>
					<br>
				</div>	
			@endforeach 
		{!! $posts->render() !!} {{-- renders pagination --}}
		</div>
	  </div>
	  <div class="col-sm-3">
	    <div class="input-group">
	      <input type="text" class="form-control" placeholder="w..t.F">
	      <span class="input-group-btn">
	        <button class="btn btn-primary" type="button">Search Posts</button>
	      </span>
	    </div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
</div>


{{-- ---------		 --}}
@stop