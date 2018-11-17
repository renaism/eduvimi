@extends('layouts.app')

@section('content')
    <style>
        .material-text {
            font-size: 1.25rem;
            text-align: justify;
        }
    </style>
    @include('inc.tab')
    <h1 class="display-4">@yield('header')</h1>
    <hr />
    @yield('material')
@endsection