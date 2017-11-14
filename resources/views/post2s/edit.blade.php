 @extends('layouts.app')






@section('content')

	<h1>Edit Post</h1>

	<form method="post" action="/post2s/{{ $post2->id }}">
		
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PATCH">
		<input type="text" name="title" placeholder="Enter title" value="{{ $post2->title }}">

		<input type="submit" name="submit" value="UPDATE">

	</form>

	<form method="post" action="/post2s/{{$post2->id}}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="DELETE">
		

	</form>



{{-- 	<form method="post" action="/posts/{{ $post->id}}">


		{{ csrf_field() }}

		<input type="hidden" name="_method" value="PUT">

		<input type="text" name="title" placeholder="Enter title" value="{{ $post->title }}">

		<input type="submit" name="submit" value="UPDATE">



	</form>
	

	<form method="post" action="/posts/{{$post->id}}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="DELETE">
		

	</form> --}}





@stop









@section('footer')
	

@stop