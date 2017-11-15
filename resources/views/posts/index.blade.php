@extends('layouts.app')


@section('content')

	
	<ul>
		@foreach($posts as $post)

		<div class="image-container">
			
			{{-- <img height="50" src="/imgaes/{{ $post->path }}"> --}}
			<img height="50" src="{{ $post->path }}">
		</div>

		<li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>

		@endforeach

	</ul>







@stop








@section('footer')




@stop
