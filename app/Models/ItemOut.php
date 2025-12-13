<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemOut extends Model
{
    use HasFactory;

    protected $table = 'item_out';
    protected $fillable = [
        'transaction_id',
        'item_id',
        'qty',
        'price',
        'subtotal',
    ];

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
