@extends('layout')

@section('title')
{{config('app.name'). "-Shows"}} 
@endsection

<!-- this simply means that index.blade.php is extending to layout.blade.php -->

@section('content')

<style type="text/css">
	
	.uper {
		margin-top:40px;
	}
</style>

<div class="uper row">

	
	@if (session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	@endif
		<a href=" {{ route('showsRoute.create') }}"> Create a new show</a>
	</div> <br >
	  <div class="row justify-content-around">
   
        
          <div class="">ID</div>
          <div class="">Show Name</div>
          <div class="">Show Genre</div>
          <div class="">Show IMDB Rating</div>
          <div class="">Lead Actor</div>
          <div class="" colspan="2">Action</div>
 
        

    

@foreach($shows as $theShow)
<!-- remember we use foreach after we must have looped through the codes with forloop or whileloop. then foreach is ude to select the values or keys depending on the situation 

	abd we uswe this foreach loop to get stuff from database in situations where we have not use the COMPACT function (compact()) in our default laravel controller or something like that

we looped through the show's (shows) array to display the data...
-->

<div class="row justify-content-around">
	<div> {{ $theShow->id }} </div>
	<div> {{ $theShow->show_name }} </div>
	<div> {{ $theShow->genre }} </div>
	<div> {{ number_format($theShow->imdb_rating,2) }} </div>
	<div>  {{ $theShow->lead_actor }}</div>
	<div> <a href="{{ route('showsRoute.edit', $theShow->id ) }}" class="btn btn-primary">Edit </a></div>


		<!-- shows.edit: for the word "shows.(dot)" it is coming from the showCOntroller that we returned from index method. so the shows. is actually a variable that has the value of all the database column values -->


		
			<form action=" {{ route('showsRoute.destroy', $theShow->id ) }} " method="post">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger " type="submit"> Delete</button>
			</form>
		
   </div>
@endforeach <!-- we have to make end every foreach statements after we have done. It is a must!!! -->
</div>


@endsection