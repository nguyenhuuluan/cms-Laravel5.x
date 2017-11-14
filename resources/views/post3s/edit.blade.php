 @extends('layouts.app')






@section('content')

	<h1>Edit Post</h1>

	<form method="post" action="/post3s/{{ $post3->id}}">
		
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PATCH">
		<input type="text" name="title" value="{{ $post3->title }}">
		<input type="submit" name="submit" value = "UPDATE">
	</form>
	
	<form method="post" action="/post3s/{{$post3->id}}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="DELETE">
		

	</form>




{{-- 	<form method="post" action="/post3s/{{ $post3->id }}">
		
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PATCH">
		<input type="text" name="title" placeholder="Enter title" value="{{ $post3->title }}">

		<input type="submit" name="submit" value="UPDATE">

	</form>

	<form method="post" action="/post2s/{{$post3->id}}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="DELETE">
		

	</form> --}}






@stop









@section('footer')
	

@stop