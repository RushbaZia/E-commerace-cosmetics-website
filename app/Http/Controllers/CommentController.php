<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::all();
        // $posts = Post::get();
        $comment = Comment::with('post')->get();
        return view('admin.pages.comments.index', compact('comment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $comment = Comment::create($request->except('_token', 'post_id'));
        //  $comment->save();
        // $comment->post()->attach($request->post_id);
        $comment = Comment::create([
            'post_id' => $request->post_id,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->route('clientBlog')->with('status', 'Added sucessfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        // $comment->post()->detach();
        $comment->delete();
        return redirect()->back()->with('delete', "User Comment Deleted Successfully");
    }
}
