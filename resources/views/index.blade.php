@extends('layouts.index')

@section('content')
    <div class="container-fluid text-center" id="content">
        <h1 class="display-1">Eduvimi</h1>
        <p class="lead">Belajar normalisasi gak pake ribet.</p>
        
        <div class="row px-5 mt-5">
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <span class="oi oi-video display-1 mb-3"></span>
                        <h5 class="card-title">
                            Video Materi
                        </h5>
                        <p class="card-text">
                            Video materi yang mudah dimengerti beserta teks ringkasan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <span class="oi oi-pencil display-1 mb-3"></span>
                        <h5 class="card-title">
                            Latihan Soal
                        </h5>
                        <p class="card-text">
                            Berlatih dengan tipe soal essay yang sering keluar di ujian.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <span class="oi oi-chat display-1 mb-3"></span>
                        <h5 class="card-title">
                            Diskusi
                        </h5>
                        <p class="card-text">
                            Kirim pertanyaan atau tanggapan di halaman diskusi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary btn-lg mt-4" href="/normalisasi" role="button">Mulai Belajar</a>
    </div>
@endsection