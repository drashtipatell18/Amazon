<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $category = Category::all();
        return view('admin.category.view_category',compact('category'));
    }
    public function createCategory(){
        return view('admin.category.create_category');
    }
    public function storeCategory(Request $request) {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        
        Category::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        session()->flash('success', 'Category added successfully!');
        return redirect()->route('category');
    }
    public function categoryEdit($id)
    {
        $category = Category::find($id);
        return view('admin.category.create_category', compact('category'));
    }

    public function categoryUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
    
        $category = Category::find($id);
    
        $category->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug')

        ]);

        session()->flash('success', 'Category Updated successfully!');
        return redirect()->route('category');
    }
    public function categoryDestroy($id)
    {
            $category = Category::find($id);
            $category->delete();
            session()->flash('danger', 'Category Delete successfully!');
            return redirect()->back();
    }
}