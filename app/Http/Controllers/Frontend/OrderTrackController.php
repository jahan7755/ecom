<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderTrackController extends Controller
{
    public function index(){
        return view("Home.order-tracking");
    }
}
