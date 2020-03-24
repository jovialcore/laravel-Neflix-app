@extends('layout')
@section('content')
<div class="row">
       <div class="col-9">
 <img src="{{asset('images/show.png')}}" class="img-fluid" alt="show imges"> 
    </div>
   {{--  for image  --}}

<div class="col-3">

	<div class="txt"> {{-- our text will be here --}}

			<p> Never found a great place to create professional displays 

				<button class="btn btn-primary " >Create One ASAP</button>
			</p>

	 </div>

</div>
</div>
@endsection