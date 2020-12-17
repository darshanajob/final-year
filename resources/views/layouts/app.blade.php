<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap.min.css') }}">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-social.css') }}">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="{{ asset('css/awesome-bootstrap-checkbox.css') }}">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="{{ asset('includes/style/css/style.css') }}">
    <script src="{{ asset('includes/javascript/jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>
    <div id="app">
       <div class="brand clearfix">
        <a href="index.html" class="logo"><img src="{{ asset('img/logo.gif ') }}" class="img-responsive" alt=""></a> 
    <div class="top_topic">  SILVEREEN REAL ESTATE COMPANY (PVT) LTD  </div>
        <span class="menu-btn"><i class="fa fa-bars"></i></span>
            <ul class="ts-profile-nav">
            <li><a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a></li>
            <li class="ts-account">
                <a href="#">
                    <img src="" class="ts-avatar hidden-side" alt=""> 

                                
                 Account <i class="fa fa-angle-down hidden-side"></i></a>
                <ul>
                    @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                   <!-- <li><a href="Exe_changePW.php"> Edit My Account</a></li>
                    <li><a href="logout.php">Logout </a></li> -->
                </ul>
            </li>
        </ul>
    </div>



        

            <div class="row" class="align-middle">
           
                @yield('content')
                
                  @include('flash-message')

     
            
            </div>
            
      

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/fileinput.js') }}"></script>
    <script src="{{ asset('js/chartData.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('includes/javascript/projBlock.js') }}"></script>
</body>
</html>
