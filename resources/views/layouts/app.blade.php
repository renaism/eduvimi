<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Eduvimi') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html, body{
            height: 100%;
        }
        #sidebar {
            padding-top: 60px;
        }
        #content {
            margin-top: 80px;
        }
    </style>
</head>
<body>
    @include('inc.navbar')
    <div class="container-fluid d-flex flex-column h-100">
        <div class="row flex-grow-1">
            <div class="col-2 p-0">
                @isset($page)
                    @include('inc.sidebar')
                @else
                    @include('inc.sidebar', ['page' => ['sub' => 'auth']]) 
                @endisset
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="container" id="content">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script')
</body>
</html>