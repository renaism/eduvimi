@extends('layouts.app')

@section('content')
    <style type="text/css">
        .comment-avatar {
            width: 75px;
            height: 75px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain; 
        }
        .comment-replies .comment-avatar {
            width: 50px;
            height: 50px;
        }
    </style>
    @include('inc.tab')
    @auth
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#newPost">Post Baru</button>
        <div class="collapse" id="newPost">
            <form action="{{ action('PostController@storePost') }}" method="post" class="pt-3">
                @csrf
                <div class="form-group">
                <textarea name="body" rows="3" class="form-control" placeholder="Post sebagai {{ Auth::user()->name }}" required></textarea>
                </div>
                <div class="form-row">
                    <div class="col">
                        <input type="hidden" name="section" value="{{ $page['sub'] }}">
                        <button type="submit" class="btn btn-primary float-right">Post</button>
                    </div>
                </div>
            </form>
        </div>
    @else
        <div class="alert alert-primary" role="alert">
            Silahkan masuk untuk ikut serta dalam diskusi
        </div>
    @endauth
    <div class="mt-3">
        @yield('discussions')
    </div>
@endsection