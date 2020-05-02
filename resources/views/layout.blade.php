<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
      <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

<style>
  body {
   background-color: #fff;
}
  
  .txt {
    color: #3d3b55;
    font-size:30px;
    font-weight: bold;
}
.bg-foot {
  background: black;
}

footer, p{
  color:white;
  }


</style>  
</head>
<body >
	<!---Our navigation starts here-->
  <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

  <nav class="mb-5 navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container-fluid">
			<a class="navbar-brand" href="/">Netflix Show App </a>
			<!---for the icon -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navjsStuff" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
			 <div class="collapse navbar-collapse" id="navjsStuff">
        <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li> 
             <li class="nav-item ">
            <a class="nav-link" href="/showsRoute">Create a show</a>
          </li>
         
          
        </ul>
		</div>
  </div>
	</nav>

  <div class="container-fluid mgCustom">
    @yield('content')
  </div>
    <div id="push"></div>
</div>

  <footer>
    <div class=" bg-foot ">
      <p class="text-center pt-5" >built jovially by @jovialcore </p>
      <p class="text-center"> &copy; 2020 </p>
    </div>
</footer>
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

