<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <script src="/js/socket.io.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KONCAT</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<body style ="background-color:black;">
    
    <div id="app" style="margin-top: -30px;">
        
        <nav class="navbar navbar-expand-md navbar-default navbar-fixed-top navbar-dark bg-dark">
            
                  <a href="/home" style="margin-left:20px">
                  <img src="images/KonCat.png" alt="Logo" width="90" height="80" style="margin-right:10px">
                  </a>
        
                <div style="margin-left: 65vw;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
        
        
                

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        

                        

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="padding: 10px;">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #000000; display: block;">
                      {{ __('Logout') }}
                </a>                
                <a class="dropdown-item" href="/showTeams" style="color: #000000; display: block;">Show my teams</a>
                <a class="dropdown-item" href="/home" style="color: #000000; display: block;">Change Location</a>

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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>