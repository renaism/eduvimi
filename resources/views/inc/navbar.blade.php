<nav class="navbar fixed-top navbar-light bg-white shadow-sm">
    <a href="/" class="navbar-brand mr-auto">Eduvimi</a>
    <form class="form-inline float-right">
        <input type="search" placeholder="Cari" class="form-control mr-sm-2">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Cari</button>
    </form>
    <div class="dropdown">
        <a href="#" role="button" id="dropDownMenuLink" data-toggle="dropdown" class="btn dropdown-toggle">
            <img src="{{ asset('bayu_sun.jpg') }}" class="rounded-circle" height="30" width="30"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">Profil</a>
            <a href="#" class="dropdown-item">Pengaturan</a>
            <a href="#" class="dropdown-item">Keluar</a>
        </div>
    </div>
</nav>