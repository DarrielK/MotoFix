<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'supplier',
        'stock',
        'unit',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function itemIn()
    {
        return $this->hasMany(ItemIn::class, 'item_id');
    }
}
