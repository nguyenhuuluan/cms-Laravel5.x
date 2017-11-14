 @extends('layouts.app')






 @section('content')




 {{-- <form method="post" action="/posts"> --}}


 	{!! Form::open(['method'=>'POST', 'action'=>'PostsController@store']) !!}

 	<div class="form-group">

 		{!! Form::label('title', 'Title:') !!}
 		{!! Form::text('title', null,['class'=>'form-controll']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
 	</div>




 	{!! Form::close() !!}
	


 	

@if($errors->has())
   @foreach ($errors->all() as $error)
      <div>{{ $error }}</div>
  @endforeach
@endif






 	@endsection









 	@section('footer')


 	@endsection