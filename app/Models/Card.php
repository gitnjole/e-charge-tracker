<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'pin',
        'amount',
        'amount_left'
    ];

    protected $casts = [
        'amount' => 'decimal:1',
        'amount_left' => 'decimal:1',
        'created_at' => 'datetime',
        'used_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relations

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'card_store');
    }
}
