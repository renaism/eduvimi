@extends('layouts.materi')

@section('header')Second Normal Form (2NF)@endsection
@section('material')
    <div class="embed-responsive embed-responsive-16by9 mb-5">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BU1C8RUK4zU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <p class="material-text">
        Syarat untuk menerapkan normalisasi bentuk kedua ini adalah data telah dibentuk dalam 1NF. Berikut adalah beberapa fungsi normalisasi 2NF:
    </p>
    <ol class="material-text">
        <li>Menghapus beberapa <em>subset</em> data yang ada pada tabel dan menempatkannya pada tabel terpisah.</li>
        <li>Menciptakan hubungan antara tabel baru dan tabel lama dengan menggunakan <em>foreign key</em>.</li>
        <li>Tidak ada atribut dalam tabel yang secara fungsional bergantung pada <em>candidate key</em> tabel tersebut.</li>
    </ol>
    <p class="material-text">
        Contoh normalisasi 2NF:
    </p>
    <table class="table table-striped">
        <caption>Data Penyewaan (belum 2NF)</caption>
        <thead class="thead-dark">
            <tr>
                <th>ID Penyewaan</th>
                <th>ID Mobil</th>
                <th>Nama Mobil</th>
                <th>ID Penyewa</th>
                <th>Nama Penyewa</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>M01</td>
                <td>Avanza</td>
                <td>P01</td>
                <td>Yazri</td>
                <td>350,000</td>
                <td>2</td>
                <td>700,000</td>
            </tr>
            <tr>
                <td>002</td>
                <td>M02</td>
                <td>Brio</td>
                <td>P02</td>
                <td>Hasbi</td>
                <td>300,000</td>
                <td>1</td>
                <td>300,000</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-striped">
        <caption>Data Penyewaan (sudah 2NF)</caption>
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
    </table>
    <p class="material-text">
        Contoh di atas kita menggunakan tabel bantuan yaitu tabel <strong>Penyewaan</strong>. Pada 2NF tidak boleh ada atribut yang berhubungan dengan atribut lainnya secara fungsional. Contohnya <strong>Nama Mobil</strong> bergantung pada <strong>ID Mobil</strong> sehingga dalam bentuk 2NF <strong>Nama Mobil</strong> dapat dihilangkan karena bisa didapatkan pada tabel <strong>Mobil</strong> dengan menggunakan <strong>ID Mobil</strong>.
    </p>
@endsection