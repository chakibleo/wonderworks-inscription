<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    function login(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('show');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details '.$user_data['email'].$user_data['password']);
     }

    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}    
