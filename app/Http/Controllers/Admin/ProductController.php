<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        
        return view('admin.view_product');
    }

    public function createProduct(){
        return view('admin.create_product');
    }
}