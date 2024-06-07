<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function Index(){
        return view('Brands.Index');
    }

    public function CreateForm(){
        return view('Brands.Create');
    }
}
