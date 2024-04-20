<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Subcategory\subcategory;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'categorys';
    protected $fillable = ['name','slug'];

    public function subCategories()
    {
        return $this->hasMany(subCategory::class);
    }
}
