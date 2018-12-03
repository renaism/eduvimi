@extends('layouts.app')
@section('title', 'Pengaturan')
@section('content')
    <h1 class="text-center">Pengaturan</h1>
    <hr />
    <div class="row my-3 my-md-5 settings-group">
        <div class="col-12 col-md-4">
            <h2 class="text-center text-md-right mr-md-5">Profil</h2>
        </div>
        <div class="col-12 col-md-8">
            <form>
                <div class="form-group">
                    <label>Alamat E-mail</label>
                    <input type="text" class="form-control" placeholder="{{ Auth::user()->email }}">
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" placeholder="Nama">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <hr />
    <div class="row my-3 my-md-5 settings-group">
        <div class="col-12 col-md-4">
            <h2 class="text-center text-md-right mr-md-5">Avatar</h2>
        </div>
        <div class="col-12 col-md-8 text-center text-md-left">
            <div class="mt-3 mt-md-0">
                <img src="{{ asset('user.svg') }}" class="rounded-circle" height="100" width="100"/>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Unggah Gambar</button>
        </div>
    </div>
    <hr />
    <div class="row my-3 my-md-5 settings-group">
        <div class="col-12 col-md-4">
            <h2 class="text-center text-md-right mr-md-5">Password</h2>
        </div>
        <div class="col-12 col-md-8">
            <form>
                <div class="form-group">
                    <label>Password Sekarang</label>
                    <input type="password" class="form-control" placeholder="Password Sekarang">
                </div>
                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" class="form-control" placeholder="Password Baru">
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input type="password" class="form-control" placeholder="Konfirmasi Password">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <hr />
    <div class="row my-3 my-md-5 settings-group">
        <div class="col-12 col-md-4">
            <h2 class="text-center text-md-right mr-md-5">Notifikasi</h2>
        </div>
        <div class="col-12 col-md-8">
            <form>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Kirim notifikasi ke e-mail saat terdapat balasan diskusi
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <hr />
@endsection