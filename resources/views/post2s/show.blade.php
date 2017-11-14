@extends('layouts.app')


@section('content')


<h1>
	<a href="{{ route('post2s.edit', $post2->id) }}">
		{{ $post2->title }}

	</a>

</h1>





{{-- <h1><a href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></h1> --}}








@stop








@section('footer')




@stop
