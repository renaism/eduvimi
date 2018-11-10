<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Eduvimi</title>
    <style>
        html, body{
            height: 100%;
        }
        #sidebar {
            padding-top: 60px;
        }
        #tab {
            padding-top: 80px;
        }
    </style>
</head>
<body>
    @include('inc.navbar')
    <div class="container-fluid d-flex flex-column h-100">
        <div class="row flex-grow-1">
            <div class="col-2 p-0">
                @include('inc.sidebar')
            </div>
            <div class="col-10">
                @include('inc.tab')
                <div class="container" id="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>