@extends('layout')

<!-- this simply means that index.blade.php is extending to layout.blade.php -->

@section('content')

<style type="text/css">
	
	.uper {
		margin-top:40px;
	}
</style>

<div class="uper">
	@if (session()->get('success'))
	<div class="alert alert-success">
		{{ session()->get('success') }}
	@endif
		<a href=" {{ route('shows.create') }}"> Create a new show</a>
	</div> <br />







	  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Show Name</td>
          <td>Show Genre</td>
          <td>Show IMDB Rating</td>
          <td>Lead Actor</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    
    <tbody>

@foreach($shows as $theShow)
<!-- remember we use foreach after we must have looped through the codes with forloop or whileloop. then foreach is ude to select the values or keys depending on the situation 

	abd we uswe this foreach loop to get stuff from database in situations where we have not use the COMPACT function (compact()) in our default laravel controller or something like that

we looped through the show's (shows) array to display the data...
-->

<tr> 

	<td> {{ $theShow->id }} </td>
	<td> {{ $theShow->show_name }} </td>
	<td> {{ $theShow->genre }} </td>
	<td> {{ number_format($theShow->imdb_rating,2) }} </td>
	<td>  {{ $theShow->lead_actor }}</td>
	<td> <a href="{{ route('shows.edit', $theShow->id ) }}" class="btn btn-primary">Edit </a></td>


		<!-- shows.edit: for the word "shows.(dot)" it is coming from the showCOntroller that we returned from index method. so the shows. is actually a variable that has the value of all the database column values -->

		<td> 
			<form action=" {{ route('shows.destroy', $theShow->id ) }} " method="post">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger" type="submit"> Delete</button>
			</form>
		</td>
</tr>	

@endforeach <!-- we have to make end every foreach statements after we have done. It is a must!!! -->
</tbody>
</table>
</div>
@endsection