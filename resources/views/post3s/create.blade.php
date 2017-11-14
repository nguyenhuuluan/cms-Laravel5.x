@extends('layouts.app')

@section('content')


	<form method="post" action="/post3s">
		<input type="text" name="title" placeholder="Enter title">{{ csrf_field() }}

		<input type="submit" name="submit">


	</form>

@endsection
