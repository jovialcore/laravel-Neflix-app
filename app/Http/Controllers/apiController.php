<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

class apiController extends Controller
{
    

    Public function reg() {

			$gt = api::all();    	

    // 		$valid =$request->validate([
    // 				'name'=>'required|max:55',
    // 				'email'=>'email|required',
    // 				'password'=>'required|confirmed'
    // 		]);

    // 			$theUser= User::create($valid);
    // 			// generate access token

    // 			$accessToken =$theUser->createToken('nameOfToken')->accessToken;




    // 			return response(['user' => $theUser, 'access_token' => $accessToken]);
    // }

}
}