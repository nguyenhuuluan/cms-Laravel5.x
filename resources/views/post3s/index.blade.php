@extends('layouts.app')

@section('content')


	<ul>
		@foreach ($post3s as $post3)
			<li>
			<a href="{{ route('post3s.show', $post3->id) }}">
				{{ $post3->title }}
			</a>
			</li>
		@endforeach

	</ul>


	<form action="{{  route('post3s.create') }}">
			<input type="submit" value="CREATE">
		</form>

@endsection
