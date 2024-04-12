<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ccoupon extends Model
{
    protected $fillable = [
        'code',
        'name',
        'discount_amount',
        'status',
        'starts_at',
        'expires_at',
    ];

    protected $dates = ['starts_at', 'expires_at'];
    
    // use HasFactory;

}
