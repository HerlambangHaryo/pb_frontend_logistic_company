<!DOCTYPE html>
<html lang="en">
    <head>
        @include('template.'.$template.'.partial.head_main')
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
                                <img src="{{ asset('/public/apland_v512') }}/img/core-img/logo-white-new.png" alt="">
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
                                                    <a href="#"> 
                                                        {{ $user->name }}
                                                    </a>
                                                    <ul class="dropdown">
                                                        <li>
                                                            <a href="{{ route('Bantukami.index') }}">
                                                                <i class="fa fa-table"></i> Data Bantukami
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
                                                <a class="btn btn-primary" href="{{ route('Bantukami.create') }}">
                                                    <i class="fa fa-plus"></i> Tambah Bantukami
                                                </a>
                                            </div> 

                                            
                                        @else 
                                            <ul id="corenav">  
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
     
        <div class="footer-bottom-area py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="copywrite-text">
                            <p class="mb-0">
                            Pengembangan Aplikasi Blockchain untuk Manajemen Rantai Pasok Tanggap Bencana<br/>
                                Lembaga Riset dan Pengabdian Masyarakat Universitas Presiden
                            </p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        @include('template.'.$template.'.partial.script_main')
    
    </body>
    
</html>