@extends('layouts.app')
@section('title')
    {{ ucfirst($page['tab']) }}
@endsection
@section('content')
    @include('inc.tab')
    <span class="d-sm-none">
        <h1>@yield('header')</h1>
    </span>
    <span class="d-none d-sm-inline">
        <h1 class="display-4">@yield('header')</h1>
    </span>
    <hr />
    @yield('material')
@endsection