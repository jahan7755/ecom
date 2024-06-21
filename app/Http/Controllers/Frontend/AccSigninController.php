<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\WelcomeRegisterMail;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class AccSigninController extends Controller
{
    public function index(){
        return view("Auth.account-signin");
    }


    public function savedata(Request $request)
    {
        

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        Mail::to($request->email)->send(new WelcomeRegisterMail($request->name));

        return redirect('/login');
        
    }


    // public function login()
    // {

    //     return view('Auth.Login');

    // }

    // public function verify(Request $request)
    // {
       
    //     $data = $request->only('email','password');
        
    //     // dd($data);
       
    //     if(Auth::attempt($data))
    //     {
    //         return redirect('/home');
    //     }
    //     else
    //     {
    //         return redirect('/login');
    //     }

    //     // dd($data);
    // }


    
    
}