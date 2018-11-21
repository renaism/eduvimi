<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse-element">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/" class="navbar-brand">Eduvimi</a>
    <div class="collapse navbar-collapse navbar-collapse-element">
        <form action="{{ action('PageController@search') }}" method="GET" class="form-inline ml-auto">
            @csrf
            <div class="input-group my-2 mr-md-2">
                <input type="search" name="search" placeholder="Cari" class="form-control" @isset($page['search']) value="{{ $page['search'] }}" @endisset>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-success">
                        <span class="oi oi-magnifying-glass"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="collapse navbar-collapse-element">
        
    </div>
    @guest
        <div class="dropdown @if (count($errors) > 0) show @endif">
            <a href="#" role="button" data-toggle="dropdown" class="btn btn-primary mr-sm-2">Masuk</a>
            <div class="dropdown-menu dropdown-menu-right @if (count($errors) > 0) show @endif">
                <form method="POST" action="{{ route('login') }}" class="p-4">
                    @csrf
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
        <div class="dropdown btn-group">
            <a href="#" role="button" data-toggle="dropdown" id="loginDropdownToggle" class="btn dropdown-toggle">
                <img src="{{ asset('user.svg') }}" class="rounded-circle" height="25" width="25"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">{{ Auth::user()->name }}</a>
                <a href="#" class="dropdown-item">Pengaturan</a>
                <a href="{{ route('logout') }}" class="dropdown-item"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    Keluar
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    @endguest
</nav>