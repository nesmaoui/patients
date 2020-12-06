<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-bottom: 0px;padding-top: 0px;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img style=" margin-left: auto; margin-right: auto; height: 60px; width: auto; display: block;" src="{{url('img/EMO1.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto ">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-info" href="{{ route('login') }}"><i class="fas fa-fingerprint"></i>Se connecter</a>
                    </li>
                    @if (Route::has('register'))
                        &nbsp;&nbsp;
                        <li class="nav-item">
                            <a class="btn btn-danger" href="{{ route('register') }}"><i class="far fa-id-badge"></i>&nbsp;&nbsp;S'identifier</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('home') }}"><i class="fas fa-home"></i>Accueil</a>
                                <a class="dropdown-item" href="{{ url('adossiers') }}"><i class="fas fa-notes-medical"></i>&nbsp;&nbsp;Mes dossiers</a>
                                <a class="dropdown-item" href="{{ url('dossiers') }}"><i class="fas fa-paste"></i>&nbsp;&nbsp;Mes demandes</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}
                            </a>
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>