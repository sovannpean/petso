<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['name'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'category_id');
    }
}
