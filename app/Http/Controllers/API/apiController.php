<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
//  
use App\User;
use App\Http\Controllers\Controller;




class apiController extends Controller
{
    
    Public function save(Request $request) {

$valid=   $request->validate([
            'name'=>'required|max:55',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed'
        ]);

$user = User::create($valid);

$accessTokenVar = $user->createToken('authToken')->accessToken;

return response(['user' => $user, 'accessToken' => $accessTokenVar  ]);

            // $apiData = new api;

            //  $apiData->id = $request->id;
            //  $apiData->client_name = $request->client_Name;  
            //  $apiData->client_Item = $request->client_Item;  

            //  return $apiData->save(); 
        
        }

        
}
