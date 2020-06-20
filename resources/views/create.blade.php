@extends('layout')
@section('title')
{{config('app.name'). "-Create"}} 
@endsection


@section('content')

<div class="card uper">
  <div class="card-header" style="background-color: #3d3b55; color:white; text-align: center;">
    Add Shows
  </div>
  <div class="card-body">
    @if ($errors->any()) 
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('showsRoute.store') }} " >
          <div class="form-group">
              @csrf
              <label for="name">Show Name:</label>
              <input type="text" class="form-control" name="show_name" value="{{ old ('show_name')}}">
          </div>
          <div class="form-group">
              <label for="price">Show Genre :</label>
              <input type="text" class="form-control" name="genre" value="{{ old ('genre')}}">
          </div>
          <div class="form-group">
              <label for="price">Show IMDB Rating :</label>
              <input type="text" class="form-control" name="imdb_rating" value="{{ old ('imdb_rating')}}"/>
          </div>
          <div class="form-group">
              <label for="quantity">Show Lead Actor :</label>
              <input type="text" class="form-control" name="lead_actor" value="{{ old ('lead_actor')}}"/>
          </div>
          <button type="submit" class="btn btn-primary" style="background-color: #3d3b55;">Create Show</button>
      </form>
  </div>
</div>
@endsection