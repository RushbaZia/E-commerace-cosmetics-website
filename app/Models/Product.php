<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'category_id',
        'price',
        'details',
        'image'
    ];  
    public function category()
    {
        return $this->belongsToMany(Category::class, 'products_category', 'product_id', 'category_id');
    }
}
