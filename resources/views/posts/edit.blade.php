 @extends('layouts.app')






@section('content')

	<h1>Edit Post</h1>

	
	{!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}
	
 		{!! Form::label('title', 'Title:') !!}
 		{!! Form::text('title', null,['class'=>'form-controll']) !!}

		{!! Form::submit('Update Post',['class'=>'btn btn-primary']) !!}

	{!! Form::close() !!}

{{-- 	<form method="post" action="/posts/{{ $post->id}}">



		<input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}">

		<input type="submit" name="submit" value="UPDATE">




	</form> --}}
	
	{{-- {!! Form::model($post, ['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!} --}}
	
	{!! Form::open(['method'=>'DELETE', 'action'=>['PostsController@destroy', $post->id]]) !!}

	
	{!! Form::submit('Delete Post',['class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}



{{-- 	<form method="post" action="/posts/{{$post->id}}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="DELETE">
		

	</form> --}}





@stop









@section('footer')
	

@stop