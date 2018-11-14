@extends('layouts.app')

@section('content')
@include('inc.tab')
<div class="accordion mt-5" id="daftarSoal">
    @yield('questions')
</div>
@endsection