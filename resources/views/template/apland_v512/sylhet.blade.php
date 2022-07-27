<!DOCTYPE html>
<html lang="en">
    <head>
        @include('template.'.$template.'.partial.head_sylhet')
    </head>
    <body>
        <!-- Preloader-->
            <div id="preloader">
                <div class="apland-load"></div>
            </div>
            
        <!-- Header Area--> 
            <header class="header-area  ">
                <div class="container">
                    <div class="classy-nav-container breakpoint-off">
                        <nav class="classy-navbar justify-content-between" id="aplandNav">
                            <!-- Logo-->
                            <a class="nav-brand" href="{{ route('Home.index') }}">
                                <img src="{{ asset('/public') }}/Untitled.png" >
                            </a>
                            <!-- Navbar Toggler-->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
                            <!-- Menu-->
                            <div class="classy-menu">
                                <!-- Close Button-->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap">
                                        <span class="top"></span>
                                        <span class="bottom"></span>
                                    </div>
                                </div>
                                <!-- Nav-->
                                <div class="classynav">

                                    @if (Route::has('login')) 
                                        @auth
                                            <ul id="corenav">  
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        Tracking Pengiriman 
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="#"> 
                                                        {{ $user->name }}
                                                    </a>
                                                    <ul class="dropdown">
                                                        <li>
                                                            <a href="{{ route('Profiles.index') }}">
                                                                <i class="fa fa-table"></i> Profiles
                                                            </a>
                                                        </li>  
                                                        <li>
                                                            <a href="{{ route('Orders.index') }}">
                                                                <i class="fa fa-table"></i> Data Orders
                                                            </a>
                                                        </li>  
                                                        <li>
                                                            <a href="{{ route('logout.perform') }}">
                                                                <i class="fa fa-sign-out"></i> Sign Out
                                                            </a>
                                                        </li>  
                                                    </ul>
                                                </li>
                                            </ul> 

                                            <div class="login-btn-area  ">
                                                <a class="btn btn-primary" href="{{ route('Orders.create') }}">
                                                    <i class="fa fa-plus"></i> Create Order
                                                </a>
                                            </div> 

                                            
                                        @else 
                                            <ul id="corenav">  
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        Tracking Pengiriman 
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="{{ route('login') }}">
                                                        Login 
                                                    </a>
                                                </li>
                                            </ul> 

                                            @if (Route::has('register')) 
                                                <div class="login-btn-area  ">
                                                    <a class="btn btn-primary" href="{{ route('register') }}">
                                                        Register
                                                    </a>
                                                </div> 
                                            @endif
                                        @endauth 
                                    @endif
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

        <!-- Night Mode Area-->
            <x-apland_v512.night-mode-wrapper />
      
        <!-- Content -->
            @yield('content')
        
        <!-- Footer Area--> 
            <!-- none -->
        <!-- Footer Bottom-->
            <!-- none -->
      
        @include('template.'.$template.'.partial.script_main')
    
    </body>
    
</html>