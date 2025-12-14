<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItemIn extends Model
{
    use HasFactory;

    protected $table = 'item_in';
    protected $fillable = [
        'item_id',
        'qty',
        'price',
        'subtotal',
        'date',
        'received_by',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'received_by');
    }
}
