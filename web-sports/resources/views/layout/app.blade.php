<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Sports</title>
	<link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/style.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo asset('css/hover-min.css')?>">
</head>
<body>

<!--  
     <nav class="navbar navbar-inverse navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">WebSports</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
-
     <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="hvr-underline-reveal" href="{{url('/')}}">Visão Geral</a></li>
            <li><a class="hvr-underline-reveal" href="{{route('teams.index')}}">Times</a></li>
            <li><a class="hvr-underline-reveal" href="{{route('matches.index')}}">Partidas</a></li>
            <li><a class="hvr-underline-reveal" href="{{route('competitions.index')}}">Competições</a></li>
            <li><a class="hvr-underline-reveal" href="{{route('seasons.index')}}">Temporadas</a></li>
          </ul>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-sm-offset-3 main">
          <div class="container-fluid left-bar-dark">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>


  <script type="text/javascript" src="<?php echo asset('js/jquery.min.js')?>" ></script>
  <script type="text/javascript" src="<?php echo asset('js/bootstrap.js')?>"></script>
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/bootstrap.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo asset('css/dashboard.css') ?>">
        <title>Web Sports</title>
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">WebSports</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/') }}">Dashboard</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="{{ url('/') }}">Início <span class="sr-only">(current)</span></a></li>
            <li><a href="{{ route('teams.index')}}">Times</a></li>
            <li><a href="{{ route('matches.index')}}">Partidas</a></li>
            <li><a href="{{ route('competitions.index')}}">Competições</a></li>
            <li><a href="{{ route('seasons.index')}}">Temporadas</a></li>
            <li><a href="{{ route('matches.create')}}">Criar Partidas</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           @yield('content')
        </div>
      </div>
    </div>

        <!-- Scripts -->
    <script src="/js/app.js"></script>
    </body>
</html>

