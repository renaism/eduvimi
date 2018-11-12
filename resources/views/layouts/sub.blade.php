@extends('layouts.app')

@section('page')
    @include('inc.tab')
    <div class="container" id="subContent">
        @yield('content')
    </div>
@endsection