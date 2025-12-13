<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
    'customer_name',
    'mechanic_name',
    'license_plate',
    'vehicle_type',
    'user_id',
    'total',
    'pay',
    'change',
];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
