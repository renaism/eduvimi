@extends('layouts.materi')

@section('header') Normalisasi @endsection
@section('material')
    <p class="material-text">
        Normalisasi adalah proses pengelolaan data dalam <em>database</em>. Normalisasi mencakup pembuatan tabel dan membangun hubungan antar tabel berdasarkan aturan perancangan yang baik agar <em>database</em> menjadi lebih fleksibel. Normalisasi dapat melindungi data dari faktor redundansi dan <em>dependency</em> yang tidak konsisten (ketergantungan fungsional). Normalisasi adalah proses formal untuk memutuskan atribut mana saja yang harus dikelompokan bersama dalam satu relasi.
    <h1>Tujuan Normalisasi</h1>
    <ol class="material-text">
        <li>Menghilangkan anomali dan membantu menjaga konsistensi data dalam database</li>
        <li>Menghindari redundansi dengan menyimpan setiap fakta dalam database hanya sekali</li>
        <li>Memasukkan data ke dalam bentuk yang lebih mampu mengakomodasi perubahan secara akurat</li>
        <li>Menghindari pembaharuan <em>(update)</em> data yang dapat menyebabkan anomali</li>
        <li>Memfasilitasi penegakkan batasan-batasan <em>(constraint)</em> data</li>
        <li>Menghindari <em>coding</em> yang tidak perlu.</li>
    </ol>
    <h1>Normal Form</h1>
    <p class="material-text">
        Data yang direkam dan dimasukkan secara mentah dalam suatu tabel pada bentuk ini sangat mungkin terjadi inkonsistensi dan anomali data.
    </p>
    <p class="material-text">
        Contoh normal form:
    </p>
    <a name="tabel"></a>
    <table class="table table-striped">
        <caption>Data peminjaman mobil</caption>
        <thead class="thead-dark">
            <tr>
                <th>ID Mobil</th>
                <th>Nama Mobil</th>
                <th>Tahun Mobil</th>
                <th>ID Peminjam</th>
                <th>Nama Peminjam</th>
                <th>Alamat Peminjam</th>
                <th>Lama Meminjam</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>M01</td>
                <td>Avanza</td>
                <td>2016</td>
                <td>P01</td>
                <td>Yazri</td>
                <td>Jl.Buah Batu no.7</td>
                <td>3 Hari</td>
            </tr>
            <tr>
                <td>M02</td>
                <td>Brio</td>
                <td>2018</td>
                <td>P02</td>
                <td>Hasbi</td>
                <td>Jl.Mengger no.10</td>
                <td>1 Hari</td>
            </tr>
            <tr>
                <td>M03</td>
                <td>Jazz</td>
                <td>2015</td>
                <td>P03</td>
                <td>Ken</td>
                <td>Jl.Bojongsoang no.1</td>
                <td>4 Hari</td>
            </tr>
            <tr>
                <td>M04</td>
                <td>Agya</td>
                <td>2016</td>
                <td>P01</td>
                <td>Yazri</td>
                <td>Jl.Buah Batu no.7</td>
                <td>3 Hari</td>
            </tr>
        </tbody>
    </table>
    <p class="material-text">
        Pada bentuk ini ada beberapa ciri ciri yang penting. Yang pertama adalah akan terjadi anomali dalam <code>INSERT</code>, <code>UPDATE</code>, dan <code>DELETE</code>. Hal ini menyebabkan beberapa fungsi DML dalam SQL tidak dapat berjalan dengan baik. Sebagai contoh jika ingin menghapus <strong>Alamat Peminjam</strong>, data <strong>Nama Mobil</strong> akan ikut terhapus. Begitu juga jika ingin menghapus <strong>Tahun Mobil</strong>, <strong>Nama Peminjam</strong> dan <strong>Alamat Peminjam</strong> yang harusnya tidak terhapus akan ikut hilang.
    </p>
@endsection