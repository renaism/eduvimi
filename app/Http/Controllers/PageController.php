<?php

namespace App\Http\Controllers;

use App\Post;
use App\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function materi($section) {
        $page = ['sub' => $section, 'tab' => 'materi'];
        return view('normalisasi.' . $page['sub'] . '.materi')->with('page', $page);
    }

    public function soal($page) {
        $page['tab'] = 'soal';
        return view('normalisasi.' . $page['sub'] . '.soal')->with($page);
    }

    public function diskusi($page) {
        $posts = Post::where('section', $page['sub'])->get();
        $postsAndReplies = collect([]);
        foreach($posts as $post) {
            $replies = Reply::where('post_id', $post->id)->get();
            $post = ['post' => $post, 'replies' => $replies];
            $postsAndReplies->push($post);
        }
        $page['tab'] = 'diskusi';
        $page['postAndReplies'] = $postsAndReplies;
        return view('normalisasi.' . $page['sub'] . '.diskusi')->with($page);
    }
}
