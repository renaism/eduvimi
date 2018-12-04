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
                    Diketahui tabel data yang belum memenuhi 3NF:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Order Id</th>
                            <th>Customer id</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>O01</td>
                            <td>C01</td>
                            <td>100 000</td>
                            <td>2</td>
                            <td>200 000</td>
                        </tr>
                        <tr>
                            <td>O02</td>
                            <td>C02</td>
                            <td>400 000</td>
                            <td>1</td>
                            <td>400 000</td>
                        </tr>
                    </tbody>
                </table></div>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 3NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban1" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban1">
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>Order Id</th>
                                <th>Customer id</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>O01</td>
                                <td>C01</td>
                                <td>100 000</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>O02</td>
                                <td>C02</td>
                                <td>400 000</td>
                                <td>1</td>
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
                    Diketahui tabel data yang belum memenuhi 3NF:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kuis 1</th>
                            <th>Kuis 2</th>
                            <th>Kuis 3</th>
                            <th>UTS</th>
                            <th>UAS</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>M01</td>
                            <td>Frenzi</td>
                            <td>80</td>
                            <td>75</td>
                            <td>56</td>
                            <td>75</td>
                            <td>84</td>
                            <td>A</td>
                        </tr>
                        <tr>
                            <td>M01</td>
                            <td>Waja</td>
                            <td>70</td>
                            <td>69</td>
                            <td>75</td>
                            <td>54</td>
                            <td>70</td>
                            <td>AB</td>
                        </tr>
                    </tbody>
                </table></div>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 3NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban2" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban2">
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Kuis 1</th>
                                <th>Kuis 2</th>
                                <th>Kuis 3</th>
                                <th>UTS</th>
                                <th>UAS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>M01</td>
                                <td>Frenzi</td>
                                <td>80</td>
                                <td>75</td>
                                <td>56</td>
                                <td>75</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>M01</td>
                                <td>Waja</td>
                                <td>70</td>
                                <td>69</td>
                                <td>75</td>
                                <td>54</td>
                                <td>70</td>
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
                    Diketahui tabel data yang belum memenuhi 3NF:
                </p>
                <div class="table-responsive"><table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Bulan</th>
                            <th>Penghasilan</th>
                            <th>Pengeluaran</th>
                            <th>Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Januari</td>
                            <td>10 Juta</td>
                            <td>4 Juta</td>
                            <td>6 Juta</td>
                        </tr>
                        <tr>
                            <td>Februari</td>
                            <td>15 Juta</td>
                            <td>5 Juta</td>
                            <td>10 Juta</td>
                        </tr>
                    </tbody>
                </table></div>
                <p>
                    Ubahlah tabel data tersebut agar memenuhi 3NF!
                </p>
                <button type="button" data-toggle="collapse" data-target="#jawaban3" class="btn btn-primary">Lihat Jawaban</button>
                <div class="collapse" id="jawaban3">
                    <div class="table-responsive"><table class="table table-bordered mt-4">
                        <thead class="thead-dark">
                            <tr>
                                <th>Bulan</th>
                                <th>Penghasilan</th>
                                <th>Pengeluaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Januari</td>
                                <td>10 Juta</td>
                                <td>4 Juta</td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>15 Juta</td>
                                <td>5 Juta</td>
                            </tr>
                        </tbody>
                    </table></div>
                </div>
            </div>
        </div>
    </div>
@endsection