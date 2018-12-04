@extends('layouts.materi')

@section('header')3rd Normal Form (3NF)@endsection
@section('material')
    <div class="embed-responsive embed-responsive-16by9 mb-5">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uToOyR9l-bY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <p class="material-text">
        <em>3rd Normal Form</em> (3NF) bertujuan untuk menghilangkan seluruh atribut yang tidak berhubungan dengan <em>primary key</em>. Dengan demikian tidak ada ketergantungan transitif pada setiap <em>candidate key</em>. Syarat dari 3NF adalah:
    </p>
    <ol class="material-text">
        <li>Memenuhi semua persyaratan dari 2NF.</li>
        <li>Menghapus kolom yang tidak bergantung pada <em>primary key</em>.</li>   
    </ol>
    <p class="material-text">
        Tidak semua kasus atau tabel dapat kita sesuaikan dengan berbagai bentuk normalisasi ini. Untuk contohnya, kita akan kembali menggunakan tabel <strong>Penyewaan</strong>:
    </p>
    <div class="table-responsive"><table class="table table-bordered">
        <caption>Data Penyewaan (belum 3NF)</caption>
        <thead class="thead-dark">
            <tr>
                <th>ID Penyewaan</th>
                <th>ID Mobil</th>
                <th>ID Penyewa</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>M01</td>
                <td>P01</td>
                <td>350,000</td>
                <td>2</td>
                <td>700,000</td>
            </tr>
            <tr>
                <td>002</td>
                <td>M02</td>
                <td>P02</td>
                <td>300,000</td>
                <td>1</td>
                <td>300,000</td>
            </tr>
        </tbody>
    </table></div>
    <div class="table-responsive"><table class="table table-bordered">
        <caption>Data Penyewaan (sudah 3NF)</caption>
        <thead class="thead-dark">
            <tr>
                <th>ID Penyewaan</th>
                <th>ID Mobil</th>
                <th>ID Penyewa</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>M01</td>
                <td>P01</td>
                <td>350,000</td>
                <td>2</td>
            </tr>
            <tr>
                <td>002</td>
                <td>M02</td>
                <td>P02</td>
                <td>300,000</td>
                <td>1</td>
            </tr>
        </tbody>
    </table></div>
    <p class="material-text">
        Pada tabel pertama, apakah semua kolom sepenuhnya bergantung pada <em>primary key</em>? Ternyata terdapat kolom atribut <strong>Total Harga</strong> yang bergantung pada <strong>Harga</strong> dan <strong>Jumlah</strong>. <strong>Total Harga</strong> dapat dihasilkan dengan mengalikan <strong>Harga</strong> dan <strong>Jumlah</strong>. Bentuk 3NF tabel tersebut didapatkan dengan membuang kolom <strong>Total Harga</strong>.
    </p>
@endsection