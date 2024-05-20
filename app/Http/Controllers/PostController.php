<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post =Post::with('tag','category')->get();
        return view('admin.pages.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tag = Tag::all();
        $category = Category::all();
        return view('admin.pages.post.create', compact('tag','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $post= Post::create($request->except('_token', 'tag_id','category_id'));
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $request->file('image')->storeAs('public/upload', $filename);
            $post->image = $filename;
        }
        $post->image = "upload/$filename";
        $post->save();

        $post->tag()->attach($request->tag_id);
        $post->category()->attach($request->category_id);
        return redirect()->route('posts.index')->with('status','Added sucessfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $tag = $post->tag()->get()->pluck('id')->toArray();
        $categories = Category::all();
        $category= $post->category()->get()->pluck('id')->toArray();
        return view('admin.pages.post.edit', compact('post','tags','tag','categories', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->except('_token','tag_id','category_id'));
        if ($request->hasFile('image')) {
            
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $request->file('image')->storeAs('public/upload', $filename);
            $post->image = $filename;
        }
        $post->image = "upload/$filename";

        
        $post->update();
        $post->tag()->sync($request->tag_id);
        $post->category()->sync($request->category_id);
        return redirect()->route('posts.index')->with('status','updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->tag()->detach();
        $post->category()->detach();
        $post->delete();
        return redirect()->route('posts.index')->with('delete','Deleted sucessfully!');
    }
}
