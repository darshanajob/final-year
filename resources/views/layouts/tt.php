<div class="brand clearfix">
        <a href="index.html" class="logo"><img src="includes/style/img/logo.gif" class="img-responsive" alt=""></a> 
    <div class="top_topic"> {{ config('app.name', 'Laravel') }}SILVEREEN REAL ESTATE COMPANY (PVT) LTD </div>
        <span class="menu-btn"><i class="fa fa-bars"></i></span>
            <ul class="ts-profile-nav">
            <li><a href="#">Help</a></li>
            <li class="ts-account">
                <a href="#">
                    <img src="" class="ts-avatar hidden-side" alt="">'; 

                                
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

    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>