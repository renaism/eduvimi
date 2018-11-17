@extends('layouts.soal')

@section('questions')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#soal1">
                Soal 1
                </button>
            </h5>
        </div>
        
        <div id="soal1" class="collapse show" data-parent="#daftarSoal">
            <div class="card-body">
                <p>
                    Diketahui tabel data yang belum ternomalisasi:
                </p>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Keahlian</th>
                            <th>Lama Pengalaman</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">101</td>
                            <td rowspan="2">Kinegar</td>
                            <td rowspan="2">Analisis Senior</td>
                            <td>Data Mining</td>
                            <td>7 Tahun</td>
                        </tr>
                        <tr>
                            <td>Networking</td>
                            <td>5 Tahun</td>
                        </tr>
                        <tr>
                            <td rowspan="2">102</td>
                            <td rowspan="2">Ritzqi</td>
                            <td rowspan="2">Analisis Junior</td>
                            <td>Mobile Programming</td>
                            <td>4 Tahun</td>
                        </tr>
                        <tr>
                            <td>Software Engineering</td>
                            <td>3 Tahun</td>
                        </tr>
                        <tr>
                            <td rowspan="2">103</td>
                            <td rowspan="2">Arqi</td>
                            <td rowspan="2">Programmer</td>
                            <td>Java</td>
                            <td>1 Tahun</td>
                        </tr>
                        <tr>
                            <td>C++</td>
                            <td>2 Tahun</td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 1NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban1" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban1">
                    <table class="table table-bordered mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Keahlian</th>
                                <th>Lama Pengalaman</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>101</td>
                                <td>Kinegar</td>
                                <td>Analisis Senior</td>
                                <td>Data Mining</td>
                                <td>7 Tahun</td>
                            </tr>
                            <tr>
                                <td>101</td>
                                <td>Kinegar</td>
                                <td>Analisis Senior</td>
                                <td>Networking</td>
                                <td>5 Tahun</td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>Ritzqi</td>
                                <td>Analisis Junior</td>
                                <td>Mobile Programming</td>
                                <td>4 Tahun</td>
                            </tr>
                            <tr>
                                <td>102</td>
                                <td>Ritzqi</td>
                                <td>Analisis Junior</td>
                                <td>Software Engineering</td>
                                <td>3 Tahun</td>
                            </tr>
                            <tr>
                                <td>103</td>
                                <td>Arqi</td>
                                <td>Programmer</td>
                                <td>Java</td>
                                <td>1 Tahun</td>
                            </tr>
                            <tr>
                                <td>103</td>
                                <td>Arqi</td>
                                <td>Programmer</td>
                                <td>C++</td>
                                <td>2 Tahun</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#soal2">
                Soal 2
                </button>
            </h5>
        </div>
        
        <div id="soal2" class="collapse" data-parent="#daftarSoal">
            <div class="card-body">
                <p>
                    Diketahui tabel data yang belum ternomalisasi:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id Buku</th>
                            <th>Judul Buku</th>
                            <th>Tgl Terbit</th>
                            <th>Id Penerbit</th>
                            <th>Nama Penerbit</th>
                            <th>Alamat Penerbit</th>
                            <th>Id Peminjam</th>
                            <th>Nama Peminjam</th>
                            <th>Alamat Peminjam</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B10</td>
                            <td>Garis Waktu</td>
                            <td>06-05-2014</td>
                            <td>P12</td>
                            <td>Togamas</td>
                            <td>Jl.Buah Batu</td>
                            <td>P01</td>
                            <td>Jhon</td>
                            <td>Jl.Sukabirus</td>
                        </tr>
                        <tr>
                            <td>B20</td>
                            <td>Anak Singkong</td>
                            <td>09-06-2016</td>
                            <td>P15</td>
                            <td>Gramedia</td>
                            <td>Jl.Merdeka</td>
                            <td>P02</td>
                            <td>Waja</td>
                            <td>Jl.Sukapura</td>
                        </tr>
                        <tr>
                            <td>B04</td>
                            <td>Arah Langkah</td>
                            <td>07-01-2012</td>
                            <td>P05</td>
                            <td>Gramedia</td>
                            <td>Jl.Merdeka</td>
                            <td>P01</td>
                            <td>Jhon</td>
                            <td>Jl.Sukabirus</td>
                        </tr>
                    </tbody>
                </table></div>
                <p class="mt-3">
                    Ubahlah tabel data tersebut agar memenuhi 1NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban2" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban2">
                    <table class="table table-bordered mt-4">
                        <caption>Data Buku</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Id Buku</th>
                                <th>Judul Buku</th>
                                <th>Tgl Terbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>B10</td>
                                <td>Garis Waktu</td>
                                <td>06-05-2014</td>
                            </tr>
                            <tr>
                                <td>B20</td>
                                <td>Anak Singkong</td>
                                <td>09-06-2016</td>
                            </tr>
                            <tr>
                                <td>B04</td>
                                <td>Arah Langkah</td>
                                <td>07-01-2012</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered mt-4">
                        <caption>Data Penerbit</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Id Penerbit</th>
                                <th>Nama Penerbit</th>
                                <th>Alamat Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P12</td>
                                <td>Togamas</td>
                                <td>Jl.Buah Batu</td>
                            </tr>
                            <tr>
                                <td>P15</td>
                                <td>Gramedia</td>
                                <td>Jl.Merdeka</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-bordered mt-4">
                        <caption>Data Peminjam</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Id Peminjam</th>
                                <th>Nama Peminjam</th>
                                <th>Alamat Peminjam</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>P01</td>
                                <td>Jhon</td>
                                <td>Jl.Sukabirus</td>
                            </tr>
                            <tr>
                                <td>P02</td>
                                <td>Waja</td>
                                <td>Jl.Sukapura</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#soal3">
                Soal 3
                </button>
            </h5>
        </div>
        
        <div id="soal3" class="collapse" data-parent="#daftarSoal">
            <div class="card-body">
                <p>
                    Diketahui tabel data yang belum ternomalisasi:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Mata Kuliah</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">M09</td>
                            <td rowspan="2">Setyo</td>
                            <td>PBD</td>
                            <td>AB</td>
                        </tr>
                        <tr>
                            <td>PBO</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td rowspan="2">M20</td>
                            <td rowspan="2">Frenzi</td>
                            <td>APPL</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>Wasglob</td>
                            <td>AB</td>
                        </tr>
                        <tr>
                            <td>M12</td>
                            <td>Agusta</td>
                            <td>Agama</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td rowspan="2">M04</td>
                            <td rowspan="2">Ken</td>
                            <td>MBD</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>STD</td>
                            <td>A</td>
                        </tr>
                    </tbody>
                </table></div>
                <p class="mt-3">
                    Ubahlah tabel data tersebut agar memenuhi 1NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban3" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban3">
                        <div class="table-responsive"><table class="table table-bordered mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Mata Kuliah</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M09</td>
                                <td>Setyo</td>
                                <td>PBD</td>
                                <td>AB</td>
                            </tr>
                            <tr>
                                <td>M09</td>
                                <td>Setyo</td>
                                <td>PBO</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>M20</td>
                                <td>Frenzi</td>
                                <td>APPL</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>M20</td>
                                <td>Frenzi</td>
                                <td>Wasglob</td>
                                <td>AB</td>
                            </tr>
                            <tr>
                                <td>M12</td>
                                <td>Agusta</td>
                                <td>Agama</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>M04</td>
                                <td>Ken</td>
                                <td>MBD</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>M04</td>
                                <td>Ken</td>
                                <td>STD</td>
                                <td>A</td>
                            </tr>
                        </tbody>
                    </table></div>
                </div>
            </div>
        </div>
    </div>
@endsection