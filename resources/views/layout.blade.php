<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 6 CRUD Example</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
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

