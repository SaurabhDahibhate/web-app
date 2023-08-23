<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HooterMasterData extends Model
{
    use HasFactory;

    protected $guarded = [];

    // common
    public function selectProduct($fieldName): BelongsTo
    {
        return $this->belongsTo(Product::class, $fieldName);
    }

}
