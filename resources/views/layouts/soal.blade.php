@extends('layouts.app')

@section('content')
@include('inc.tab')
<div class="accordion" id="daftarSoal">
    @yield('questions')
</div>
@endsection