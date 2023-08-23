<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BoqRequest extends Model
{
    use HasFactory;

    protected $casts = [
        'is_submitted' => 'boolean',
        'is_approved' => 'boolean'
    ];

    // user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // switch maker
    public function switchMaker(): BelongsTo
    {
        return $this->belongsTo(Manufacture::class);
    }


    // panel type
    public function panelType(): BelongsTo
    {
        return $this->belongsTo(PanelType::class);
    }

}
