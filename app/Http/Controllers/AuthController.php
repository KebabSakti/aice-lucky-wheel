<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Login;

class AuthController extends Controller
{
    public function auth(Request $request){
    	return response()->json([
	    	'username' => $request->username,
	    	'password' => $request->password
	    ]);
    }
}
