<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/" class="navbar-brand mx-auto">Eduvimi</a>
    <!-- User -->
    @guest
        <div class="dropdown order-2 order-lg-3 @if (count($errors) > 0) show @endif">
            <a href="#" role="button" data-toggle="dropdown" class="btn btn-primary mr-2">Masuk</a>
            <div class="dropdown-menu dropdown-menu-right @if (count($errors) > 0) show @endif">
                <form method="POST" action="{{ route('login') }}" class="p-4">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" oninvalid="this.setCustomValidity('Email tidak valid')" oninput="setCustomValidity('')" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" oninvalid="this.setCustomValidity('Password harus diisi')" oninput="setCustomValidity('')" required>
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
        <div class="dropdown btn-group order-2 order-lg-3">
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
    <!-- End User -->
    <div class="collapse navbar-collapse order-3 order-lg-2" id="navbarSupportedContent">
        <form action="{{ action('PageController@search') }}" method="GET" class="form-inline ml-auto">
            @csrf
            <div class="input-group my-2 my-lg-0 mr-lg-2 w-100">
                <input type="search" name="search" placeholder="Cari" class="form-control" @isset($page['search']) value="{{ $page['search'] }}" @endisset>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-success">
                        <span class="oi oi-magnifying-glass"></span>
                    </button>
                </div>
            </div>
        </form>
        <nav class="list-group list-group-flush w-100 px-0 d-lg-none">
            <a href="/normalisasi" class="list-group-item list-group-item-action @if($page['sub']=='main') bg-light @else bg-white @endif">Normalisasi</a>
            <a href="/normalisasi/1nf" class="list-group-item list-group-item-action @if($page['sub']=='1nf') bg-light @else bg-white @endif">1NF</a>
            <a href="/normalisasi/2nf" class="list-group-item list-group-item-action @if($page['sub']=='2nf') bg-light @else bg-white @endif">2NF</a>
            <a href="/normalisasi/3nf" class="list-group-item list-group-item-action @if($page['sub']=='3nf') bg-light @else bg-white @endif">3NF</a>
            <a href="/normalisasi/bcnf" class="list-group-item list-group-item-action @if($page['sub']=='bcnf') bg-light @else bg-white @endif">BCNF</a>
        </nav>
    </div>
</nav>