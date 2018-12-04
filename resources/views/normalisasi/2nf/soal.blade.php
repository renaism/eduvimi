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
                    Diketahui tabel data yang belum memenuhi 2NF:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID_TRX</th>
                            <th>JUDUL_BUKU</th>
                            <th>ID_BUKU</th>
                            <th>ID_PEMINJAM</th>
                            <th>ID_PENERBIT</th>
                            <th>NAMA_PENERBIT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Anak Singkong</td>
                            <td>B01</td>
                            <td>P01</td>
                            <td>T01</td>
                            <td>PT Aneka Buku</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Anak Bayung</td>
                            <td>B02</td>
                            <td>P01</td>
                            <td>T02</td>
                            <td>PT Buku Selera</td>
                        </tr>
                    </tbody>
                </table></div>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 2NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban1" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban1">
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <caption>Data Peminjaman</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>ID_TRX</th>
                                <th>ID_BUKU</th>
                                <th>ID_PEMINJAM</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>B01</td>
                                <td>P01</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>B02</td>
                                <td>P01</td>
                            </tr>
                        </tbody>
                    </table></div>
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <caption>Data Buku</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>ID_BUKU</th>
                                <th>JUDUL_BUKU</th>
                                <th>ID_PENERBIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>B01</td>
                                <td>Anak Singkong</td>
                                <td>PT Aneka Buku</td>
                            </tr>
                            <tr>
                                <td>B02</td>
                                <td>Anak Bayung</td>
                                <td>PT Buku Selera</td>
                            </tr>
                        </tbody>
                    </table></div>
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
                    Diketahui tabel data yang belum memenuhi 2NF:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Keahlian</th>
                            <th>Lama Bekerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Gill</td>
                            <td>Analisis</td>
                            <td>Access</td>
                            <td>6 Tahun</td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Gill</td>
                            <td>Analisis</td>
                            <td>Oracle</td>
                            <td>3 Tahun</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ryan</td>
                            <td>Programmer</td>
                            <td>C</td>
                            <td>5 Tahun</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ryan</td>
                            <td>Programmer</td>
                            <td>Java</td>
                            <td>8 Tahun</td>
                        </tr>
                    </tbody>
                </table></div>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 2NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban2" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban2">
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <caption>Data Pegawai</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Gill</td>
                                <td>Analisis</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Ryan</td>
                                <td>Programmer</td>
                            </tr>
                        </tbody>
                    </table></div>
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <caption>Data Keahlian Pegawai</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>NIP</th>
                                <th>Keahlian</th>
                                <th>Lama Bekerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>ACCESS</td>
                                <td>6 Tahun</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td>ORACLE</td>
                                <td>3 Tahun</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>C</td>
                                <td>5 Tahun</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>Java</td>
                                <td>8 Tahun</td>
                            </tr>
                        </tbody>
                    </table></div>
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
                    Diketahui tabel data yang belum memenuhi 2NF:
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
                            <td>1001</td>
                            <td>Irma</td>
                            <td>DAP</td>
                            <td>B</td>
                        </tr>
                        <tr>
                            <td>1001</td>
                            <td>Irma</td>
                            <td>PBO</td>
                            <td>AB</td>
                        </tr>
                        <tr>
                            <td>1004</td>
                            <td>Nofalia</td>
                            <td>PBD</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>1004</td>
                            <td>Nofalia</td>
                            <td>DAA</td>
                            <td>D</td>
                        </tr>
                    </tbody>
                </table></div>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 2NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban3" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban3">
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <caption>Data Mahasiswa</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>Irma</td>
                            </tr>
                            <tr>
                                <td>1004</td>
                                <td>Nofalia</td>
                            </tr>
                        </tbody>
                    </table></div>
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <caption>Data Nilai Mahasiswa</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Mata Kuliah</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>DAP</td>
                                <td>B</td>
                            </tr>
                            <tr>
                                <td>1001</td>
                                <td>PBO</td>
                                <td>AB</td>
                            </tr>
                            <tr>
                                <td>1004</td>
                                <td>PBD</td>
                                <td>C</td>
                            </tr>
                            <tr>
                                <td>1004</td>
                                <td>DAA</td>
                                <td>D</td>
                            </tr>
                        </tbody>
                    </table></div>
                </div>
            </div>
        </div>
    </div>
@endsection