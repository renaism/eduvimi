@extends('layouts.diskusi')

@section('discussions')
    <div class="comment mt-3">
        <div class="comment-main d-flex flex-row">
            <div class="comment-avatar rounded-circle" style="background-image: url({{ asset('bayu_sun.jpg') }}"></div>
            <div class="comment-content flex-grow-1 ml-3">
                <div class="comment-header">
                    <a href="#"><h5>Bayu Arifat</h5></a>
                </div>
                <div class="comment-text">
                    Yah jembut...
                </div>
                <div class="comment-footer d-flex mt-2">
                    <div><small>24 Februari 2018</small></div>
                    @auth
                        <div class="ml-3">
                            <a href="#" data-toggle="collapse" data-target="#comment-reply-1">Balas</a>
                        </div>
                    @endauth
                </div>
                @auth
                    <div class="collapse" id="comment-reply-1">
                        <form action="#" class="mt-3">
                            <div class="form-group">
                                <textarea name="postText" rows="1" class="form-control" placeholder="Tambahkan komentar..."></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary float-right">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>   
                @endauth
            </div>
        </div>
        <div class="comment-replies ml-5 mt-3">
            <div class="comment-main d-flex flex-row">
                <div class="comment-avatar rounded-circle" style="background-image: url({{ asset('bayu_sun.jpg') }}"></div>
                <div class="comment-content flex-grow-1 ml-3">
                    <div class="comment-header">
                        <a href="#"><h5>Bayu Arifat</h5></a>
                    </div>
                    <div class="comment-text">
                        Yah jembut...
                    </div>
                    <div class="comment-footer d-flex mt-2">
                        <div><small>24 Februari 2018</small></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />
@endsection