<header id="header" class="header">
    <!--section contact and social-->
    <div class="header-top bg-black-333 sm-text-center border-top-theme-color-3px p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!--Contact us-->
                    <div class="widget no-border">
                        <ul class="list-inline  text-white ">
                            <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white">
                                    <i class="ion-ios-telephone color-blue widget-icon-size"></i> +1-754-302-4917 </a>
                            </li>
                            <li class="m-0 pl-10 pr-10">
                                <a href="#" class="text-white">
                                    <i class="ion-ios-email color-blue widget-icon-size"></i> info@ipsxpo.com
                                </a>
                            </li>
                            <li class="m-0 pl-10 pr-10">
                                <a href="#" class="text-white">
                                    <i class="ion-social-skype color-blue widget-icon-size"></i> info_816321
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <!--Social-->
                    <div class="widget no-border ">
                        <ul class="styled-icons icon-dark icon-sm pull-right justify-content-end mt-sm-15">
                            <li><a href="#" data-toggle="tooltip" title="Español"> <img src="img/flag-sp.png" alt="Español" ></a></li>
                            <li><a href="#" data-toggle="tooltip" title="English"><img src="img/flag-en.png" alt="English"></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <!--Social-->
                    <div class="widget no-border ">
                        <ul class="styled-icons icon-dark icon-sm pull-right  sm-text-center mt-sm-15">
                            <li><a href="#"><i class="ion-social-facebook text-white"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter text-white"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus text-white"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram text-white"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- section menu -->
    <div >
        <div class="container">
            <!--menu custom-->
            <div class="menu-custom">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="logo" href="{{ url('/') }}">

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
                        <!--<ul class="navbar-nav mr-auto ">-->
                        <ul class="navbar-nav ">
                            <li class="nav-item @if(Route::is('web.index')) active @endif" >
                                <a class="nav-link" href="{{ route('web.index')}}">INICIO <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item @if(Route::is('web.about')) active @endif">
                                <a class="nav-link" href="{{ route('web.about')}}">NOSOTROS</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="productos.html" id="navbarDropdown-services" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    SERVICIOS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-services">
                                    <a class="dropdown-item @if(Route::is('web.advantage')) active @endif" href="{{ route('web.advantage')}}">VENTAJAS</a>
                                    {{--<a class="dropdown-item" href="login.html">SOLICITA PRESUPUESTO</a>--}}
                                    <a class="dropdown-item @if(Route::is('web.request')) active @endif" href="{{ route('web.request')}}">SOLICITA PRESUPUESTO</a>
                                    <a class="dropdown-item @if(Route::is('web.quote')) active @endif" href="{{ route('web.quote')}}">COTIZA TU ENVIO</a>
                                    <!--<div class="dropdown-divider"></div>-->
                                    <!--<a class="dropdown-item" href="login.html">Something else here</a>-->
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="productos.html" id="navbarDropdown-products" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    PRODUCTOS
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-products">
                                    <a class="dropdown-item @if(Route::is('web.products')) active @endif" href="{{ route('web.products')}}">INVENTARIO</a>
                                    {{--<a class="dropdown-item @if(Route::is('web.request')) active @endif" href="login.html">PROVEEDORES</a>--}}
                                    <!--<div class="dropdown-divider"></div>-->
                                    <!--<a class="dropdown-item" href="login.html">Something else here</a>-->
                                </div>
                            </li>


                            <li class="nav-item @if(Route::is('web.faq')) active @endif">
                                <a class="nav-link" href="{{ route('web.faq')}}">FAQ</a>
                            </li>

                            <li class="nav-item @if(Route::is('web.contact')) active @endif">
                                <a class="nav-link" href="{{ route('web.contact')}}">CONTACTENOS</a>
                            </li>
                            <!--<li class="nav-item">-->
                            <!--<a class="nav-link disabled" href="#">Disabled</a>-->
                            <!--</li>-->
                        </ul>

                    </div>
                </nav>
            </div>

        </div>

    </div>
</header>