<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'tag_id',
        'category_id',
        'author',
        'image',
        
    ]; 
    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'posts_tags', 'post_id', 'tag_id');
    } 
    public function category()
    {
        return $this->belongsToMany(Category::class, 'posts_categories', 'post_id', 'category_id');
    } 
    public function comment()
    {
        // return $this->belongsToMany(Comment::class, 'posts_comments', 'post_id', 'comment_id');
        return $this->hasMany(Comment::class);
    }

}
