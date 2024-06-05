<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccProfileController extends Controller
{
    public function index(){
        return view("Home.account-profile");
    }
}
