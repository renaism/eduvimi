<?php

namespace App\Http\Controllers;

use App\Post;
use App\Reply;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['profile', 'settings']]);
    }

    public function materi($section='main') {
        $page = ['sub' => $section, 'tab' => 'materi'];
        return view('normalisasi.' . $section . '.materi')->with('page', $page);
    }

    public function soal($section='main') {
        $page = ['sub' => $section, 'tab' => 'soal'];
        return view('normalisasi.' . $section . '.soal')->with('page', $page);
    }

    public function diskusi($section='main') {
        $posts = Post::where('section', $section)->orderBy('created_at', 'desc')->get();
        $postsAndReplies = collect([]);
        foreach($posts as $post) {
            $post->user_name = User::find($post->user_id)->name;
            $replies = Reply::where('post_id', $post->id)->orderBy('created_at', 'asc')->get();
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

    public function search(Request $request) {
        $page = [
            'sub' => 'search',
            'search' => $request->input('search')
        ];
        return view('layouts.search')->with('page', $page);
    }

    public function profile() {
        return view('profile');
    }

    public function settings() {
        return view('settings');
    }
}
