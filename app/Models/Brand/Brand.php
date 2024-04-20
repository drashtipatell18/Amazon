<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Subcategory\subcategory;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'brands';
    protected $fillable = ['name','slug','status'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}