@extends('layouts.app')
@section('title')
    {{ ucfirst($page['tab']) }}
@endsection
@section('content')
@include('inc.tab')
<div class="accordion" id="daftarSoal">
    @yield('questions')
</div>
@endsection