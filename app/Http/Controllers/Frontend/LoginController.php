<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("Auth.login");
    }

    public function login()
    {

        return view('Auth.Login');

    }

    public function verify(Request $request)
    {
       
        $data = $request->only('email','password');
        
        // dd($data);
       
        if(Auth::attempt($data))
        {
            return redirect('/home');
        }
        else
        {
            return redirect('/login')->withErrors(['email' => 'Invalid email or password.'])->withInput($request->except('password'));

        }

        // dd($data);
    }



}
