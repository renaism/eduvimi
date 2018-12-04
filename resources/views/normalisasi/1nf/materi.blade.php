@extends('layouts.materi')

@section('header')1st Normal Form (1NF)@endsection
@section('material')
    <div class="embed-responsive embed-responsive-16by9 mb-5">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BU1C8RUK4zU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <p class="material-text">
        <em>1st Normal Form</em> (1NF) mensyaratkan beberapa kondisi dalam sebuah <em>database</em>. Berikut adalah fungsi dari 1NF ini:
    </p>
    <ol class="material-text">
        <li>Menghilangkan duplikasi kolom dari tabel yang sama.</li>
        <li>Buat tabel terpisah untuk masing-masing kelompok data terkait dan mengidentifikasi setiap baris dengan kolom yang unik <em>(primary key)</em>.</li>
    </ol>
    <p class="material-text">
        Contoh normalisasi 1NF dari <a href="/normalisasi#tabel"> tabel sebelumnya</a>:
    </p>
    <a name="tabel"></a>
    <div class="table-responsive"><table class="table table-bordered">
        <caption>Data mobil</caption>
        <thead class="thead-dark">
            <tr>
                <th>ID Mobil</th>
                <th>Nama Mobil</th>
                <th>Tahun Mobil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>M01</td>
                <td>Avanza</td>
                <td>2016</td>
            </tr>
            <tr>
                <td>M02</td>
                <td>Brio</td>
                <td>2018</td>
            </tr>
            <tr>
                <td>M03</td>
                <td>Jazz</td>
                <td>2015</td>
            </tr>
            <tr>
                <td>M04</td>
                <td>Agya</td>
                <td>2016</td>
            </tr>
        </tbody>
    </table></div>
    <div class="table-responsive"><table class="table table-bordered">
        <caption>Data Peminjam</caption>
        <thead class="thead-dark">
            <tr>
                <th>ID Peminjam</th>
                <th>Nama Peminjam</th>
                <th>Alamat Peminjam</th>
                <th>Lama Meminjam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>P01</td>
                <td>Yazri</td>
                <td>Jl.Buah Batu no.7</td>
                <td>3 Hari</td>
            </tr>
            <tr>
                <td>P02</td>
                <td>Hasbi</td>
                <td>Jl.Mengger no.10</td>
                <td>1 Hari</td>
            </tr>
            <tr>
                <td>P03</td>
                <td>Ken</td>
                <td>Jl.Bojongsoang no.1</td>
                <td>4 Hari</td>
            </tr>
        </tbody>
    </table></div>
    <p class="material-text">
        Bentuk normalisasi 1NF mengelompokkan beberapa tipe data atau kelompok data yang sejenis agar dapat dipisahkan sehingga anomali data dapat diatasi. Contoh adalah ketika kita ingin melakukan <code>INSERT</code>, <code>UPDATE</code>, atau <code>DELETE</code> pada data <strong>Mobil</strong>. Kita tidak akan bersinggungan dengan data <strong>Peminjam</strong> sehingga data <strong>Peminjam</strong> aman meskipun kita memodifikasi data <strong>Mobil</strong>.
    </p>
@endsection