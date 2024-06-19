<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
// use illuminate\Support\Facades\DB;
class BrandController extends Controller
{
    public function Index(){
        
        $brands = Brand::all();
        //bija rasta 
        // $brands = DB::table('brands')->get();
        // $brands = DB::select('Select * from brands');

        return view('Brands.Index',compact('brands'));
    }

    public function CreateForm(){
        return view('Brands.Create');
    }

    public function Save(Request $request){

        Brand::create([
            'name'=>$request->name,
            'seller'=>$request->seller,
            'origin'=>$request->origin,
            'location'=>$request->location,
            'rating'=>$request->rating,
            'logo'=>$request->logo,
        ]);

        return redirect('/admin/brands')->with('primary','Brand Added Successfully');
    }

    public function UpdateForm($id){

        $brand = Brand::findOrFail($id);
        
        return view('Brands.Update',compact('brand'));

    }

    public function UpdateData(Request $request,$id){

        $brand = Brand::findOrFail($id);
        
        
        $brand->update([
            'name'=>$request->name,
            'seller'=>$request->seller,
            'origin'=>$request->origin,
            'location'=>$request->location,
            'rating'=>$request->rating,
            'logo'=>$request->logo,
        ]);

        return redirect("/admin/brands")->with('success','Brand Updated Successfully');

    }

    public function DeleteBrand($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect("/admin/brands")->with('danger','Brand deleted Successfully');
    }
}


