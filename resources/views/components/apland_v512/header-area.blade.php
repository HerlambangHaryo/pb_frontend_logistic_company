<header class="header-area  ">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between" id="aplandNav">
                <!-- Logo-->
                <a class="nav-brand" href="{{ route('Home.index') }}">
                    <img src="{{ asset('/public/apland_v512') }}/img/core-img/logo-white.png" alt="">
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
                                        <a href="#home"> 
                                        </a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="apland-barisal.html">
                                                    Data Bantukami
                                                </a>
                                            </li>  
                                        </ul>
                                    </li>
                                </ul> 

                                <div class="login-btn-area  ">
                                    <a class="btn btn-primary" href="{{ route('register') }}">
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