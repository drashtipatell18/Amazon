<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Subcategory\subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subcategory(){
        $subcategory = subcategory::all();
        return view('admin.subcategory.view_subcategory',compact('subcategory'));
    }

    public function createsubCategory(){
        $category = Category::pluck('name','name');
        return view('admin.subcategory.create_subcategory',compact('category'));
    }
    public function storeCategory(Request $request) {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'slug' => 'required',
        ]);
        
        subcategory::create([
            'category' => $request->input('name'),
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status')
        ]);
        
        return redirect()->route('category');
    }
    public function Editsubcategory($id)
    {
        $subcategory = subcategory::find($id);
        return view('admin.subcategory.create_subcategory', compact('subcategory'));
    }

    public function Updatesubcategory(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'slug' => 'required',
        ]);
    
        $subcategory = subcategory::find($id);
    
        $subcategory->update([
            'category' => $request->input('name'),
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status')
        ]);
    
        return redirect()->route('subcategory');
    }
    public function Destroysubcategory($id)
    {
            $subcategory = subcategory::find($id);
            $subcategory->delete();
            return redirect()->back();
    }
}