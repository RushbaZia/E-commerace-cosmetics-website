<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','image'
    ];
    public function product()
    {
        return $this->belongsToMany(Product::class, 'products_categories', 'product_id', 'category_id');
    }
    public function post()
    {
        return $this->belongsToMany(Post::class, 'posts_categories', 'post_id', 'category_id');
    } 
}
