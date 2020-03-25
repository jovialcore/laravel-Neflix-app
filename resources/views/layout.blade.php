<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 6 CRUD Example</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />




<style>
  body {
   background-color: #fff;
}
  .uper {
    margin-top: 40px;
  }
  .txt {
    color: #6c63ff;
    font-size:30px;
  }

</style>  
</head>
<body>
	<!---Our navigation starts here-->
	



  <nav class="mb-5 navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	
			<a class="navbar-brand" href="#">Netflix Show App </a>
			<!---for the icon -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navjsStuff" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
			 <div class="collapse navbar-collapse" id="navjsStuff">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/home">All about the app
         <!--      <span class="sr-only">(current)</span> no useful -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/shopping">Explore</a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="/shopping">Create a show</a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="/shopping">Edit a show</a>
          </li>
          
        </ul>
		</div>
	</nav>
  <div class="container mt-5">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

<!-- My personal note:

to create a laravel project,
first, you have 
migrate: create database columns and name
then create a model that will use to get the NAME attributes from the form.

controller : it acts as a middle man that detects what will happen in the database and enters data from the views to the data base. controller also uses the NAME attributes from model.
 -->

</html>

