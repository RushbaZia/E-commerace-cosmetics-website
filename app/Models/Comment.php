<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'post_id',
        'name',
        'email',
        'message',
    ];
    public function post()
    {
        //  return $this->belongsToMany(Post::class, 'posts_comments', 'post_id', 'comment_id');
        return $this->belongsTo(Post::class);
    }
}
