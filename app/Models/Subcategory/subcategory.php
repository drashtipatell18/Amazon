<?php

namespace App\Models\Subcategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category\Category;
use App\Models\Brand\Brand;

class subcategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sub_categorys';
    protected $fillable = ['category','name','slug','status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
