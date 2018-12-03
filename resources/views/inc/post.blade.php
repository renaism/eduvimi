<div class="post mt-3">
    <div class="post-main d-flex flex-row">
        <div class="post-avatar rounded-circle" style="background-image: url('{{ asset('user.svg') }}')"></div>
        <div class="post-content flex-grow-1 ml-3">
            <div class="post-header">
                <a href="#"><h5>{{ $post['post']->user_name }}</h5></a>
            </div>
            <div class="post-text">
                {{ $post['post']->body }}
            </div>
            <div class="post-footer d-flex mt-2">
                <div><small>{{ date('j M y - H:i', strtotime($post['post']->created_at)) }}</small></div>
                @auth
                    <div class="ml-2">
                        <button type="button" class="btn btn-link p-0" data-toggle="collapse" data-target="#postReply{{ $post['post']->id }}">Balas</button>
                    </div>
                    @if(Auth::id() == $post['post']->user_id)
                    <div class="ml-2">
                        <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#deletePost{{ $post['post']->id }}">Hapus</button>
                        <div class="modal fade" id="deletePost{{ $post['post']->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-body">
                                    Apakah anda yakin akan menghapus post ini?
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ action('PostController@destroyPost', $post['post']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endauth
            </div>
            @auth
                <div class="collapse" id="postReply{{ $post['post']->id }}">
                    <form action="{{ action('PostController@storeReply') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <textarea name="body" rows="1" class="form-control" placeholder="Tambahkan komentar..." required></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="hidden" name="post_id" value="{{ $post['post']->id }}">
                                <button type="submit" class="btn btn-primary float-right">Post</button>
                            </div>
                        </div>
                    </form>
                </div>   
            @endauth
        </div>
    </div>
    <div class="post-replies ml-5 mt-3">
        @foreach($post['replies'] as $reply)
            <div class="post-main d-flex flex-row">
                <div class="post-avatar rounded-circle" style="background-image: url('{{ asset('user.svg') }}')"></div>
                <div class="post-content flex-grow-1 ml-3">
                    <div class="post-header">
                        <a href="#"><h5>{{ $reply->user_name }}</h5></a>
                    </div>
                    <div class="post-text">
                        {{ $reply->body }}
                    </div>
                    <div class="post-footer d-flex mt-2">
                        <div><small>{{ date('j M y - H:i', strtotime($reply->created_at)) }}</small></div>
                        @auth
                            @if(Auth::id() == $reply->user_id)
                            <div class="ml-2">
                                <button type="button" class="btn btn-link p-0" data-toggle="modal" data-target="#deleteReply{{ $reply->id }}">Hapus</button>
                                <div class="modal fade" id="deleteReply{{ $reply->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                            Apakah anda yakin akan menghapus komentar ini?
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ action('PostController@destroyReply', $reply) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>