<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'quantity',
        'price',
        'details',
        'image'
    ];  
    public function category()
    {
        return $this->belongsToMany(Category::class, 'products_categories', 'product_id', 'category_id');
    }
}
