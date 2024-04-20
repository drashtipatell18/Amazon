<?php

namespace App\Models\Subcategory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class subcategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'sub_categorys';
    protected $fillable = ['category','name','slug','status'];
}
