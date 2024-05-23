<?php

namespace App\Http\Controllers;

use App\Models\BlogPage;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        $posts = Post::get();
        $comments = Comment::get();
        return view('client.pages.blog', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findorfail($id);
        $posts = Post::get();
        $categories = Category::get();
        $tag = Tag::get();
        $users = User::get();
        $comment = Comment::get();
        return view('client.pages.blogSingle', compact('posts', 'categories', 'tag', 'users', 'comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPage $blogPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPage $blogPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPage $blogPage)
    {
        //
    }
}
