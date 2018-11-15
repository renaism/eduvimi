<?php

namespace App\Http\Controllers;

use App\Post;
use App\Reply;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function materi($section) {
        $page = ['sub' => $section, 'tab' => 'materi'];
        return view('normalisasi.' . $section . '.materi')->with('page', $page);
    }

    public function soal($section) {
        $page = ['sub' => $section, 'tab' => 'soal'];
        return view('normalisasi.' . $section . '.soal')->with('page', $page);
    }

    public function diskusi($section) {
        $posts = Post::where('section', $section)->orderBy('created_at', 'desc')->get();
        $postsAndReplies = collect([]);
        foreach($posts as $post) {
            $post->user_name = User::find($post->user_id)->name;
            $replies = Reply::where('post_id', $post->id)->orderBy('created_at', 'desc')->get();
            foreach($replies as $reply) {
                $reply->user_name = User::find($reply->user_id)->name;
            }
            $post = ['post' => $post, 'replies' => $replies];
            $postsAndReplies->push($post);
        }
        $page = [
            'sub' => $section, 
            'tab' => 'diskusi',
            'postAndReplies' => $postsAndReplies
        ];
        return view('layouts.diskusi')->with('page', $page);
    }
}
