<nav class="nav nav-pills justify-content-center mb-5" id="tab">
    <a href="/normalisasi/{{ $page['sub'] }}/materi" class="nav-item nav-link @if($page['tab']=='materi') active @endif)">Materi</a>
    <a href="/normalisasi/{{ $page['sub'] }}/soal" class="nav-item nav-link @if($page['tab']=='soal') active @endif">Soal</a>
    <a href="/normalisasi/{{ $page['sub'] }}/diskusi" class="nav-item nav-link @if($page['tab']=='diskusi') active @endif">Diskusi</a>
</nav>