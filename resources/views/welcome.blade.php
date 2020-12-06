

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Expert Medical Opinion</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background: url({{url('img/a.jpg')}});
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 100% !important;
                height: 100hv !important;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="float-left fixed-top" style="width: 100px;">
                    <img style="height: 62px;width: auto;padding-left: 45px;padding-top: 10px;" src="{{url('img/EMO1.png')}}">
            </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <script>
                         window.location.href = "{{ url('/home') }}"; //using a named route
                        </script>
                    @else
                        <a class="btn btn-info" href="{{ route('login') }}"><i class="fas fa-fingerprint"></i>Se connecter</a>

                        @if (Route::has('register'))
                            <a class="btn btn-danger" href="{{ route('register') }}"><i class="far fa-id-badge"></i>&nbsp;&nbsp;S'identifier</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <a class="btn btn-secondary" href="http://expertmo.epizy.com/"><i class="fas fa-home"></i>Accueil</a>
                    <a class="btn btn-success" href="http://expertmo.epizy.com/#cnt"><i class="far fa-paper-plane"></i>Contact</a>
                    <a class="btn btn-info" href="{{ route('login') }}"><i class="fas fa-fingerprint"></i>Se connecter</a>
                    <a class="btn btn-danger" href="{{ route('register') }}"><i class="far fa-id-badge"></i>&nbsp;&nbsp;S'identifier</a>

                </div>
            </div>
        </div>
    </body>
</html>
