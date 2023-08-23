<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CurrentMasterData extends Model
{
    use HasFactory;

    protected $guarded = [];

    // manufacture
    public function manufacture(): BelongsTo
    {
        return $this->belongsTo(Manufacture::class);
    }

    // hp
    public function hp(): BelongsTo
    {
        return $this->belongsTo(Hp::class);
    }

    // panel type
    public function panelType(): BelongsTo
    {
        return $this->belongsTo(PanelType::class);
    }

    // common
    public function selectProduct($fieldName): BelongsTo
    {
        return $this->belongsTo(Product::class, $fieldName);
    }

}
