<nav
    class="navbar navbar-expand-lg top-space navbar-light bg-white header-light fixed-top navbar-boxed header-reverse-scroll">
    <div class="container-fluid nav-header-container">
        <div class="col-6 col-lg-2 me-auto ps-lg-0">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset('images/logo_uaa.png')}}"
                     data-at2x="images/logo_uaa.png" class="default-logo" alt="">
                <img src="{{asset('images/logo_uaa.png')}}" data-at2x="images/logo-black@2x.png" class="alt-logo"
                     alt="">
                <img src="{{asset('images/logo_uaa.png')}}"
                     data-at2x="images/logo_uaa.png" class="mobile-logo" alt="">
            </a>
        </div>
        <div class="col-auto menu-order px-lg-0">
            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
                <span class="navbar-toggler-line"></span>
            </button>
            <div class=" collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav alt-font">
                    <li class="nav-item dropdown megamenu">
                        <a href="{{url('/')}}" class="nav-link">Accueil</a>
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                           aria-hidden="true"></i>
                    </li>
                    <li class="nav-item dropdown simple-dropdown">
                        <a href="{{route('about')}}" class="nav-link">À Propos</a>
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                           aria-hidden="true"></i>
                    </li>
                    <li class="nav-item dropdown simple-dropdown">
                        <a href="{{route('projects')}}" class="nav-link">Projets</a>
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                           aria-hidden="true"></i>
                    </li>
                    <li class="nav-item dropdown megamenu">
                        <a href="{{route('involve')}}" class="nav-link">S'impliquer</a>
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                           aria-hidden="true"></i>
                    </li>
                    <li class="nav-item dropdown simple-dropdown">
                        <a href="{{route('partnership')}}" class="nav-link">Partenariats</a>
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                           aria-hidden="true"></i>
                    </li>
{{--                    <li class="nav-item dropdown simple-dropdown">--}}
{{--                        <a href="{{route('blog')}}" class="nav-link">Blog</a>--}}
{{--                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"--}}
{{--                           aria-hidden="true"></i>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown megamenu">
                        <a href="{{route('contact')}}" class="nav-link">Contact</a>
                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                           aria-hidden="true"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-auto text-end pe-0 font-size-0">
            <div class="header-language dropdown d-lg-inline-block">
                <a href="javascript:void(0);"><i class="feather icon-feather-globe"></i></a>
                <ul class="dropdown-menu alt-font">
                    <li><a href="javascript:void(0);" title="English"><span class="icon-country"><img
                                    src="images/country-flag-16X16/usa.png" alt=""></span>English</a></li>
                    <li><a href="javascript:void(0);" title="England"><span class="icon-country"><img
                                    src="images/country-flag-16X16/england.png" alt=""></span>England</a></li>
                    <li><a href="javascript:void(0);" title="France"><span class="icon-country"><img
                                    src="images/country-flag-16X16/france.png" alt=""></span>France</a></li>
                    <li><a href="javascript:void(0);" title="Russian"><span class="icon-country"><img
                                    src="images/country-flag-16X16/russian.png" alt=""></span>Russian</a></li>
                    <li><a href="javascript:void(0);" title="Spain"><span class="icon-country"><img
                                    src="images/country-flag-16X16/spain.png" alt=""></span>Spain</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
