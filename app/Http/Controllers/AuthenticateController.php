<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DateTime;
use DB;
use App\User;

class AuthenticateController extends Controller
{
    //
		
	public function getDash()
	{
		
		return view('user.user-index');
		
	}
}
