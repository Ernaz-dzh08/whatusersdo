<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use URL;
class AuthController extends Controller
{

    public function getRegister()
    {
        return view('auth.register');
    }
 
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postRegister(Request $request)
    {
	     $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'name' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6',
        ]);
 
        User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);
		
		/*$name = $request::input('name');
        $surname = $request::input('email');
        $password = bcrypt($request::input('password'));
	    DB::table('users')->insert(
            ['name' => $name, 'email' => $surname, 'password' => $password]
         );*/
 
        return redirect()
                    ->route('auth.login')
                    ->withInfo('Your account has been created and you can now sign in');
    }
 
    public function postLogin(Request $request)
    {
     
        $authStatus = Auth::attempt($request->only(['name', 'password']), $request->has('remember'));
        if (!$authStatus) {
            return redirect()->back()->with('warning', 'Invalid Email or Password');
        }
		return redirect()->intended('auth/dash');

    }
	

    public function logOut()
    {
        Auth::logout();
 
        return redirect('/');
    }
 
}
