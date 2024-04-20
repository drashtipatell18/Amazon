<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'products';
    protected $fillable = ['title','slug','description','price','compare_price','category_id','sub_category_id','brand_id','is_featured','sku','track_qty','qty','status'];
}
