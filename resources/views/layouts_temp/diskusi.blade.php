@extends('layouts.app')

@section('page')
    @include('inc.tab')
    <div class="container" id="subContent">
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#newPost">Post Baru</button>
        <div class="collapse" id="newPost">
            <form action="#" class="pt-3">
                <div class="form-group">
                    <textarea name="postText" rows="3" class="form-control" placeholder="Post sebagai Bayu Arifatul"></textarea>
                </div>
                <div class="form-row">
                    <div class="col">
                        <button type="submit" class="btn btn-primary float-right">Post</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-3">
            @yield('discussions')
        </div>
    </div>

@endsection