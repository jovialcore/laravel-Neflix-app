@extends('layout')
@section('content')

<style type="text/css">
	
	.btn{
		color:#;
	}


.btn-primary{
	background: #3d3b55; 
	color:white;
	border:0px solid white;
}

.test-bg{
	background: #3d3b55; 
	color:white;
	font-size: 30px;
}
.card {
	background: #212529;
}
.card-text {
	color:white;
}
.col-8{
	border-radius: 5px;
}

.btn-p{
	border:2px solid white;
	border-radius: 5px;
	color: white;
}
.p-caro{
	color:black;
	font-size: 20px;
}
.imgcaro {
	width: 250px;
	height:70%;	
	}

/*for mobile view only*/

@media screen and (max-width: 650px){
img {
	width: 350px;	
	}
	.txt {
		font-size: 20px;
	}
	.img-fluid{
		width: 300px;
	}
}

</style>
  

<div class="row " >
       <div class="col-12" >
 <img src="{{asset('images/show.png')}}" class="img-fluid float-md-left float-none d-block mx-auto mx-md-0"  width="500px" alt="show imges">
 <p class="txt text-justify"> Never found a great place to create professional displays. So basically we just ad any shows, eidt them then run em so quickly that is basically how we can fix anything that we want to fix using this method that has abrubptlty generated a scalfolding of 27 degrees centigrade..yeah! lol 

<a href="/showsRoute">  <button class="btn btn-lg btn-primary d-block mx-auto mt-2" > Create One ASAP </button>  </a>	
</p>
    </div>
   {{--  for image  --}}

</div>
<div class="container mt-4">
<div class="row">

<div class="col-lg-4" >
		
		<div class="card">
			<div class="card-body">
				<span class="navbar-toggler-icon d-block mx-auto " style="background: black;"></span>
				<p class="card-text"> Do more of more work with less energy to infuse all data and avoid wasting your time!</p>
				<button class="btn btn-lg btn-primary mx-auto d-block">Tap less, Do More</button>
			</div>
			</div>
</div>
		

		<div class="col-lg-4 mt-3 mt-lg-0" >
			<div class="card">
				<div class="card-body">
					<p class="card-text">Spare yourself some energy and grow with what you have and make sure that you are always on the right track to avoid being misled.  </p>
					<button class="btn btn-lg btn-primary mx-auto d-block">Save energy, Do More</button>
				
				</div>
			</div>
		</div>

				<div class="col-lg-4 mt-3 mt-lg-0 mb-3 mb-lg-0" >
			<div class="card">
				<div class="card-body">
					<p class="card-text">You shouldn't spend much time accomplishing stuff. 
						you just have to use whatever alternative you have_Have an easier life either!
					</p>
					<button class="btn btn-lg btn-primary mx-auto d-block">Easier Life and Doing More</button>
				
				</div>
			</div>
		</div>

	</div>

</div>


<!--- testimonials page-->

<div class="container-fluid p-0 mt-lg-3 mt-0">
	<div class="row">
		<div class="col-12 ">
			<h1 class="text-center"> People Share These Testimonies:</h1>
		<!--- Carousel/Slider-->
			<div id="karoindicta" class="carousel slide my-4" data-ride="carousel">
			<ol class="carousel-indicators ">
				<li class="mt-5 bg-dark" data-target="#karoindicta" data-slide-to="0" class="active"> </li>
				<li class="mt-5 bg-dark" data-target="#karoindicta" data-slide-to="1" > </li>
				<li class="mt-5 bg-dark" data-target="#karoindicta" data-slide-to="2" > </li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="imgcaro img-fluid rounded-circle shadow mx-auto d-block" src="{{ asset('images/show.png') }}"   style="border:4px solid #3d3b55;" alt="First slide">
					<div class="text-center p-caro col-12 col-lg-5 mx-auto ">
						"I have been using this app since 1849 and i have never had issues. I am 20 years old now and I still dont regret using the app"
						--Samuel Major
					</div>
				</div>

				<div class="carousel-item ">
					
					<img class="imgcaro img-fluid rounded-circle shadow mx-auto  d-block" src="{{ asset('images/show.png') }}"   style="border:4px solid #3d3b55;"  alt="second slide">
					<div class="text-center p-caro col-12 col-lg-5 mx-auto">
						"You can't beat any market niche without this web app. Kudos to jovialcore for this awesome job. He is literally the best when it comes to creativitiy that does not sideline sustainability. No regrets since 1947!" 
						--Mercy Inyang

					</div>

				</div>


				<div class="carousel-item ">
					<img class="imgcaro img-fluid rounded-circle shadow  mx-auto d-block" src="{{ asset('images/show.png') }}" style="border:4px solid #3d3b55;"  alt="third slide">
						<div class="text-center p-caro  col-12 col-lg-5 mx-auto">
						"Any business line that is thinkng of doing  buiz without this appp may not survive the heat in the  tech market. You are either using this app or you are doing rub blah  blah blah.,....I am a user since 1940.."
						--Chidera
					</div>
				</div>

			
			</div>
			</div>
		</div>
	</div>
</div>

<div class="row mt-4">
	<div class="col-10  shadow shadow-lg mx-auto test-bg ">
		<p class="text-center ">Subscibe to Our NewsLetter</p>
		<div class="form-group pt-1">
			<label > Enter email Address:</label>
			<input class="form-control " type="email" name="email">
			<button type="submit" class="btn btn-p btn-lg d-block mx-auto mt-3">Subscribe</button>
		</div>
			
		</div>
	</div>

@endsection