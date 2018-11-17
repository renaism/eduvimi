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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
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
        #topBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
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
                    @include('inc.sidebar', ['page' => ['sub' => 'other']])
                @endisset
            </div>
            <div class="col-10 p-0 pb-5">
                @isset($page)
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="container" id="content">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                @else
                    @yield('content')
                @endisset
            </div>
        </div>
    </div>
    <button id="topBtn" title="Kembali ke atas" class="btn btn-primary btn-lg">
        <span class="oi oi-chevron-top"></span>
    </button> 
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#topBtn').fadeIn();
                } else {
                    $('#topBtn').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#topBtn').click(function () {
                $('#topBtn').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
            
            $('#topBtn').tooltip('show');
        });
    </script>
    @yield('script')
</body>
</html>