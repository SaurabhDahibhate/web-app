<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // manufacturers
    public function manufacturer()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id', 'id');
    }

    // categories
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // sub_categories
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'subcategory_id', 'id');
    }

    // unit
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }

}
