@extends('layouts.app')
@section('title', 'Profil')
@section('content')
    @auth
    <div class="d-flex flex-column flex-md-row align-items-center pt-5">
        <img src="{{ asset('user.svg') }}" class="rounded-circle" height="250" width="250"/>
        <div class="ml-md-5 mt-5 mt-md-0 text-center text-md-left">
            <h1>{{ Auth::user()->name }}</h1>
            <h4>{{ Auth::user()->email }}</h4>
            <p>Bergabung pada {{ date('j F Y', strtotime(Auth::user()->created_at)) }}</p>
            <a href="/settings" class="btn btn-primary">Edit Profil</a>
        </div>
    </div>
    @endauth
@endsection