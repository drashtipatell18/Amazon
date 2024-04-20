<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand\Brand;

class BrandController extends Controller
{
    public function brand(){
        $brands = Brand::all();
        return view('brand.view_brand',compact('brands'));
    }

    public function createBrand(){
        return view('brand.create_brand');
    }

    public function insertBrand(Request $request ){
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);
       
        $brands = Brand::create([
            'name'      => $request->input('name'),
            'slug'     => $request->input('slug'),
            'status'     => $request->input('status'),
        ]);

        session()->flash('success', 'Brand added successfully!');
        return redirect()->route('brand');
    }

    public function EditBrand($id){
        $brands = Brand::find($id);
        return view('brand.create_brand', compact('brands'));
    }

    public function UpdateBrand(Request $request,$id){
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $brands = Brand::find($id);

        $brands->update([
            'name'      => $request->input('name'),
            'slug'     => $request->input('slug'),
            'status'     => $request->input('status'),
         ]);

        session()->flash('success', 'Brand Update successfully!');
        return redirect()->route('brand');
    }

    public function destroyBrand($id)
    {
        $brands = Brand::find($id);
        $brands->delete();
        return redirect()->back();
        session()->flash('danger', 'Brand Delete successfully!');
    }
}