<nav class="navbar fixed-top navbar-light bg-white shadow-sm">
    <a href="/" class="navbar-brand mr-auto">Eduvimi</a>
    <form class="form-inline">
        <input type="search" placeholder="Cari" class="form-control mr-sm-2">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0 mr-sm-2">Cari</button>
    </form>
    @guest
        <div class="dropdown">
            <a href="#" role="button" data-toggle="dropdown" class="btn btn-primary mr-sm-2">Masuk</a>
            <div class="dropdown-menu dropdown-menu-right">
                <form class="p-4">
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Ingat Saya</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </form>
                <div class="dropdown-divider"></div>
                <a href="{{ route('register') }}" class="dropdown-item">Belum punya akun? Daftar</a>
                <a href="{{ route('password.request') }}" class="dropdown-item">Lupa Password?</a>
            </div>
        </div>
    @else
        <div class="dropdown">
            <a href="#" role="button" data-toggle="dropdown" class="btn dropdown-toggle">
                <img src="{{ asset('bayu_sun.jpg') }}" class="rounded-circle" height="25" width="25"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">Profil</a>
                <a href="#" class="dropdown-item">Pengaturan</a>
                <a href="#" class="dropdown-item">Keluar</a>
            </div>
        </div>
    @endguest
</nav>