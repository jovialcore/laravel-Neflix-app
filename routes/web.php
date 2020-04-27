<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('homepage');
// });

Route::resource('showsRoute', 'showController');
// this first argument also helps to point to the controller class 

//so the shows will be pointing to whatever method that is in the showController

Auth::routes(['register' => false, 'login'=> false]);

Route::get('/', 'HomeController@index');




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/', 'apiController@reg');