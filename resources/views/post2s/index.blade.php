@extends('layouts.app')


@section('content')



		<ul>
			@foreach ($post2s as $post2)

			<li>
				<a href="{{ route('post2s.show',$post2->id) }}">
					{{ $post2->title }}
				</a>
			</li>

			@endforeach
			

		</ul>

		<form action="{{  route('post2s.create') }}">
			<input type="submit" value="CREATE">
		</form>

{{-- 
	<ul>
		@foreach($posts as $post)

		<li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>

		@endforeach

	</ul> --}}







	@stop








	@section('footer')




	@stop
