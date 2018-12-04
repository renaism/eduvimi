@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <div class="container-fluid text-center">
        <h1 class="brand mb-5"><strong>E D U <span style="color: orange">V</span> I M I</strong></h1>
        <h3>Belajar normalisasi di mana saja!</h3>
        
        <div class="row px-5 mt-5">
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card text-center h-100">
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
                <div class="card text-center h-100">
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
                <div class="card text-center h-100">
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