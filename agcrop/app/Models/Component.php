<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Component extends Model
{
    use HasFactory;

    protected $guarded = [];

    // category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
