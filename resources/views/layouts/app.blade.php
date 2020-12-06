<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Expert Medical Opinion') }}</title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        
        @include('partials.menu')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    @include('partials.flash')
                </div>       
            </div>
        </div>
        

        @yield('content')
    </div>

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    @yield('javascripts')
</body>
</html>
