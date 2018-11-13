@extends('layouts.diskusi')

@section('discussions')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('bayu_sun.jpg') }}" class="rounded-circle" height="80" width="80"/>
                </div>
                <div class="col-10">
                    <h4>Bayu Arifatul</h4>
                    <p>
                        GUA GANTENG
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="card ml-5 mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('bayu_sun.jpg') }}" class="rounded-circle" height="60" width="60"/>
                </div>
                <div class="col-10">
                    <h5>Bayu Arifatul</h5>
                    <p>
                        BENER BANGET
                    </p>
                </div>
            </div>
        </div>
    </div>
    <form action="#" class="ml-5 mt-3">
        <div class="form-group">
            <textarea name="postText" rows="1" class="form-control" placeholder="Tambahkan komentar..."></textarea>
        </div>
        <div class="form-row">
            <div class="col">
                <button type="submit" class="btn btn-primary float-right">Post</button>
            </div>
        </div>
    </form>
@endsection