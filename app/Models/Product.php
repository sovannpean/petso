<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
  
class Product extends Model
{
    // use HasFactory;
  
    protected $fillable = [
        'name', 'price', 'detail' , 'size' , 'images' , 'category_id'
    ];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }
}