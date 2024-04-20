<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Category\Category;
use App\Models\Subcategory\subcategory;
use App\Models\Brand\Brand;

class ProductController extends Controller
{
    public function product(){
        $products = Product::all();
        return view('admin.product.view_product',compact('products'));
    }

    public function createProduct(){
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $brands = Brand::all();
        return view('admin.product.create_product', compact('categories', 'subCategories', 'brands'));
    }

    public function storeProduct(){
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required',
            'compare_price' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'brand_id' => 'required',
            'is_featured' => 'required',
            'sku' => 'required',
            'track_qty' => 'required',
            'qty' => 'required',
            'status' => 'required',
        ]);
        
        Product::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        session()->flash('success', 'Product added successfully!');
        return redirect()->route('product');
    }
}