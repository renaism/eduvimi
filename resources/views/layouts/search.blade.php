@extends('layouts.app')

@section('content')
    <h1>Hasil pencarian untuk "{{ $page['search'] }}"</h1>
    <div class="list-group mt-5" id="searchResults">
        <a href="/normalisasi/1nf" class="list-group-item list-group-item-action">
            <h1>1NF</h1>
            <p>
                ... Bentuk normalisasi 1NF mengelompokkan beberapa tipe data atau kelompok data yang sejenis agar dapat dipisahkan sehingga anomali data dapat diatasi ... 
            </p>
        </a>
        <a href="/normalisasi/2nf" class="list-group-item list-group-item-action">
            <h1>2NF</h1>
            <p>
                ... Contoh di atas kita menggunakan tabel bantuan yaitu tabel Penyewaan. Pada 2NF tidak boleh ada atribut yang berhubungan dengan atribut lainnya secara ... 
            </p>
        </a>
        <a href="/normalisasi/3nf" class="list-group-item list-group-item-action">
            <h1>3NF</h1>
            <p>
                ... Pada tabel pertama, apakah semua kolom sepenuhnya bergantung pada primary key? Ternyata terdapat kolom atribut Total Harga yang bergantung ... 
            </p>
        </a>
    </div>
@endsection