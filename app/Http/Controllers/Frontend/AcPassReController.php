<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AcPassReController extends Controller
{
    public function index(){
        return view("Auth.account-password-recovery");
    }
}
