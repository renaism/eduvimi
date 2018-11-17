@extends('layouts.app')

@section('content')
    <style>
        .post-avatar {
            width: 75px;
            height: 75px;
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain; 
        }
        .post-replies .post-avatar {
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
            Silahkan <a href="#" class="alert-link login-toggle">masuk</a> untuk ikut serta dalam diskusi
        </div>
    @endauth
    <div class="mt-3">
        @if(count($page['postAndReplies']) > 0)
            @foreach ($page['postAndReplies'] as $post)
                <hr />
                @include('inc.post', ['post' => $post])
            @endforeach
            <hr />
        @else
            <h1 class="text-center text-black-50 mt-5">Belum ada diskusi</h1>
        @endif
        @yield('discussions')
    </div>
@endsection
@section('script')
    <script>
        $('.login-toggle').click(function(e){
            e.stopPropagation();
            $('#loginDropdownToggle').dropdown('toggle');
        });
    </script>
@endsection