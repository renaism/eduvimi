<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use App\Reply;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post = new Post;
        $post->section = $request->input('section');
        $post->body = $request->input('body');
        $post->user_id = Auth::id();

        $post->save();

        return back()->with('success', 'Post Created');
    }

    public function storeReply(Request $request) {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $reply = new Reply;
        $reply->body = $request->input('body');
        $reply->post_id = $request->input('post_id');
        $reply->user_id = Auth::id();

        $reply->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroyPost(Post $post)
    {
        // Get the post
        $post = Post::find($id);

        // Get all replies to the post
        $replies = Reply::where('post_id', $post->id)->get();

        // Delete all replies for the post
        foreach ($replies as $reply) {
            $reply->delete();
        }

        // Delete the post
        $post->delete();
    }

    public function destroyReply(Reply $reply)
    {
        $reply = Reply::find($id);
        $reply->delete();
    }
}
