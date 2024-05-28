<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'status',
        'receiver_name',
        'receiver_phone',
        'province',
        'district',
        'commune',
        'house_address',
        'email',
        'order_notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withPivot('quantity');
    }
}