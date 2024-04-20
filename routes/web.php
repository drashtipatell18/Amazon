<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboradController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Brand\BrandController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ReturnController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes([
    'register' => false, 
    'reset' => false,    
    'verify' => false   
]);

Route::get('/logout',[HomeController::class,'Logout'])->name('logout');
Route::get('/dashborad', [DashboradController::class, 'dashborad'])->name('dashborad');

//Category//
Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/category/create', [CategoryController::class, 'createCategory'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'storeCategory'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('edit.category');
Route::post('/category/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('update.category');
Route::get('/category/destroy/{id}',[CategoryController::class,'categoryDestroy'])->name('destroy.category'); 

// Sub Category //

Route::get('/subcategory', [SubCategoryController::class, 'subcategory'])->name('subcategory');
Route::get('/subcategory/create', [SubCategoryController::class, 'createsubCategory'])->name('subcategory.create');
Route::post('/subcategory/store', [SubCategoryController::class, 'storesubCategory'])->name('subcategory.store');
Route::get('/subcategory/edit/{id}', [SubCategoryController::class, 'Editsubcategory'])->name('edit.subcategory');
Route::post('/subcategory/update/{id}', [SubCategoryController::class, 'Updatesubcategory'])->name('update.subcategory');
Route::get('/subcategory/destroy/{id}',[SubCategoryController::class,'Destroysubcategory'])->name('destroy.subcategory');


// Product // 
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/product/create', [ProductController::class, 'createProduct'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'storeProduct'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'EditProduct'])->name('edit.product');
Route::post('/product/update/{id}', [ProductController::class, 'UpdateProduct'])->name('update.product');
Route::get('/product/destroy/{id}',[ProductController::class,'destroyProduct'])->name('destroy.product');   
Route::post('/updateStock', [ProductController::class, 'updateStock'])->name('updateStock');

// order //

Route::get('/order', [OrderController::class, 'order'])->name('order');
// Route::get('/order/create', [OrderController::class, 'createOrder'])->name('order.create');
// Route::post('/order/store', [OrderController::class, 'storeOrder'])->name('order.store');
// Route::get('/order/edit/{id}', [OrderController::class, 'EditOrder'])->name('edit.order');
// Route::post('/order/update/{id}', [OrderController::class, 'UpdateOrder'])->name('update.order');
// Route::get('/order/destroy/{id}',[OrderController::class,'destroyOrder'])->name('destroy.order');   


// Discount //

Route::get('/discount', [DiscountController::class, 'discount'])->name('discount');
Route::get('/discount/create', [DiscountController::class, 'createDiscount'])->name('discount.create');
Route::post('/discount/store', [DiscountController::class, 'storeDiscount'])->name('discount.store');
Route::get('/discount/edit/{id}', [DiscountController::class, 'EditDiscount'])->name('edit.discount');
Route::post('/discount/update/{id}', [DiscountController::class, 'UpdateDiscount'])->name('update.discount');
Route::get('/discount/destroy/{id}',[DiscountController::class,'destroyDiscount'])->name('destroy.discount'); 

// brand //

Route::get('/brand', [BrandController::class, 'brand'])->name('brand');
Route::get('/brand/create', [BrandController::class, 'createBrand'])->name('brand.create');
Route::post('/brand/insert', [BrandController::class, 'insertBrand'])->name('brand.store');
Route::get('/brand/edit/{id}', [BrandController::class, 'EditBrand'])->name('edit.brand');
Route::post('/brand/update/{id}', [BrandController::class, 'UpdateBrand'])->name('update.brand');
Route::get('/brand/destroy/{id}',[BrandController::class,'destroyBrand'])->name('destroy.brand');   

// users //
 
Route::get('/admin/user', [UserController::class, 'user'])->name('user');
Route::get('/admin/user/create',[UserController::class,'userCreate'])->name('create.user');
Route::post('/admin/user/insert',[UserController::class,'userInsert'])->name('insert.user');
Route::get('/admin/user/edit/{id}', [UserController::class, 'userEdit'])->name('edit.user');
Route::post('/admin/user/update/{id}', [UserController::class, 'userUpdate'])->name('update.user');
Route::get('/admin/user/destroy/{id}',[UserController::class,'userDestroy'])->name('destroy.user');