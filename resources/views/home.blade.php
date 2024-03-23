@extends('layouts.main')

@section('content')
    <!-- start section -->
    <section class="p-0">
        <div class="swiper-container white-move mobileoff-fullscreen-top-space md-h-600px sm-h-500px"
             data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                     style="background-image:url({{asset('images/two.jpg')}});">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">
                                    Agir pour Impacter</p>
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">
                                    Tel est notre crédo. Agissons ensemble ! </h2>
                                {{--                                <div class="d-inline-block">--}}
                                {{--                                    <a href="https://1.envato.market/AL7Oj" target="_blank"--}}
                                {{--                                       class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom">Purchase--}}
                                {{--                                        now</a>--}}
                                {{--                                    <a href="our-process.html"--}}
                                {{--                                       class="btn btn-link btn-large text-white top-minus-5px font-weight-400">How we--}}
                                {{--                                        work</a>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                     style="background-image:url({{asset('images/portrait.jpg')}});">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">
                                    Appel à l’action</p>
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">
                                    Contribuer positivement au développement du continent</h2>
                                {{--                                <div class="d-inline-block">--}}
                                {{--                                    <a href="https://1.envato.market/AL7Oj" target="_blank"--}}
                                {{--                                       class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom">Purchase--}}
                                {{--                                        now</a>--}}
                                {{--                                    <a href="our-process.html"--}}
                                {{--                                       class="btn btn-link btn-large text-white top-minus-5px font-weight-400">How we--}}
                                {{--                                        work</a>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background"
                     style="background-image:url({{asset('images/equipe.jpg')}});">
                    <div class="overlay-bg bg-gradient-dark-slate-blue"></div>
                    <div class="container h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 col-xl-6 col-lg-7 col-sm-8 h-100 d-flex justify-content-center flex-column position-relative">
                                <p class="alt-font text-extra-medium text-white opacity-7 font-weight-300 margin-40px-bottom xs-margin-20px-bottom">
                                    Bouger les lignes</p>
                                <h2 class="alt-font text-shadow-double-large font-weight-600 text-white margin-55px-bottom w-90 md-w-100 md-no-text-shadow xs-margin-35px-bottom">
                                    La diaspora est le premier partenaire de son continent</h2>
                                {{--                                <div class="d-inline-block">--}}
                                {{--                                    <a href="https://1.envato.market/AL7Oj" target="_blank"--}}
                                {{--                                       class="btn btn-fancy btn-medium btn-gradient-sky-blue-pink margin-30px-right xs-margin-15px-bottom">Purchase--}}
                                {{--                                        now</a>--}}
                                {{--                                    <a href="our-process.html"--}}
                                {{--                                       class="btn btn-link btn-large text-white top-minus-5px font-weight-400">How we--}}
                                {{--                                        work</a>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-light-pagination"></div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <!-- <div class="swiper-button-next-nav swiper-button-next rounded-circle slider-navigation-style-07"><i class="feather icon-feather-arrow-right"></i></div>
            <div class="swiper-button-previous-nav swiper-button-prev rounded-circle slider-navigation-style-07"><i class="feather icon-feather-arrow-left"></i></div>  -->
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center wow animate__fadeIn">
                <div
                    class="col-12 col-xl-3 col-lg-4 col-sm-7 d-flex flex-column text-center text-lg-start md-margin-6-rem-bottom">
                    <div class="margin-20px-bottom sm-margin-10px-bottom">
                        <span class="alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500">A propos de l'entreprise</span>
                    </div>
                    <h6 class="alt-font text-extra-dark-gray font-weight-600 margin-20px-bottom md-margin-30px-bottom xs-w-90 mx-auto mx-sm-0 text-justify">
                        Concrètement, UAA fédère et mobilise un réseau d'acteurs volontaires pour appuyer le
                        développement prospère du continent</h6>
                    <div class="mt-auto mx-auto mx-lg-0">
                        <a href="{{route('about')}}" class="btn btn-fancy btn-small btn-transparent-light-gray">Voir
                            plus</a>
                    </div>
                </div>
                <div class="col-12 col-xl-7 offset-xl-2 col-lg-8 last-paragraph-no-margin wow animate__fadeIn"
                     data-wow-duration="0.3">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-sm-2">
                        <!-- start feature box item -->
                        <div
                            class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Money-Bag icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    {{--                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Effective strategy</span>--}}
                                    <p>UAA est née du constat suivant : la diaspora est le premier partenaire de son
                                        continent, elle a un rôle clé à jouer pour faire bouger les lignes</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div
                            class="col margin-60px-bottom sm-margin-30px-bottom xs-margin-40px-bottom wow animate__fadeIn"
                            data-wow-delay="0.2s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Gear-2 icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    {{--                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull customize</span>--}}
                                    <p>Ainsi, UAA - Union des Actions pour l’Afrique offre aux africains et
                                        afrodescendants, l’opportunité d’unir leurs forces pour soutenir la réalisation
                                        de projets à fort impact en Afrique.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col xs-margin-40px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Talk-Man icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    {{--                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Customer satisfaction</span>--}}
                                    <p>Concrètement, UAA fédère et mobilise un réseau d'acteurs volontaires pour appuyer
                                        le développement prospère du continent. </p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                        <!-- start feature box item -->
                        <div class="col wow animate__fadeIn" data-wow-delay="0.6s">
                            <div class="feature-box feature-box-left-icon">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Cursor-Click2 icon-medium text-extra-light-gray margin-35px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    {{--                                    <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">No coding required</span>--}}
                                    <p>Vous avez l’Afrique à cœur ? UAA vous offre la possibilité de contribuer
                                        positivement au développement du continent. Pour mettre en oeuvre sa
                                        vision, </p>
                                </div>
                            </div>
                        </div>
                        <!-- end feature box item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
{{--    <section class="bg-light-blue">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div--}}
{{--                    class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">--}}
{{--                <span--}}
{{--                    class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">POURQUOI NOUS CHOISIR</span>--}}
{{--                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95">--}}
{{--                        “Agir pour Impacter” : tel est notre crédo. Agissons ensemble ! </h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-12 wow animate__fadeIn">--}}
{{--                    <div class="outside-box-right">--}}
{{--                        <!-- start slider -->--}}
{{--                        <div class="swiper-container white-move"--}}
{{--                             data-slider-options='{"loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3500, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } } }'>--}}
{{--                            <div class="swiper-wrapper">--}}
{{--                                <!-- start interactive banner item -->--}}
{{--                                <div class="swiper-slide interactive-banners-style-07">--}}
{{--                                    <div class="interactive-banners-box bg-dark-slate-blue">--}}
{{--                                        <div class="interactive-banners-box-image">--}}
{{--                                            <img src="images/home-business-services-img01.jpg" alt=""/>--}}
{{--                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>--}}
{{--                                        </div>--}}
{{--                                        <div--}}
{{--                                            class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">--}}
{{--                                        <span--}}
{{--                                            class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Flexible</span>--}}
{{--                                            <div--}}
{{--                                                class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">--}}
{{--                                                Bundle of layout type different layout--}}
{{--                                            </div>--}}
{{--                                            <a href="about-us.html"--}}
{{--                                               class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn--}}
{{--                                                more</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end interactive banner item -->--}}
{{--                                <!-- start interactive banner item -->--}}
{{--                                <div class="swiper-slide interactive-banners-style-07">--}}
{{--                                    <div class="interactive-banners-box bg-dark-slate-blue">--}}
{{--                                        <div class="interactive-banners-box-image">--}}
{{--                                            <img src="images/home-business-services-img02.jpg" alt=""/>--}}
{{--                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>--}}
{{--                                        </div>--}}
{{--                                        <div--}}
{{--                                            class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">--}}
{{--                                        <span--}}
{{--                                            class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Unique</span>--}}
{{--                                            <div--}}
{{--                                                class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">--}}
{{--                                                We are delivering beautiful products--}}
{{--                                            </div>--}}
{{--                                            <a href="about-us.html"--}}
{{--                                               class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn--}}
{{--                                                more</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end interactive banner item -->--}}
{{--                                <!-- start interactive banner item -->--}}
{{--                                <div class="swiper-slide interactive-banners-style-07">--}}
{{--                                    <div class="interactive-banners-box bg-dark-slate-blue">--}}
{{--                                        <div class="interactive-banners-box-image">--}}
{{--                                            <img src="images/home-business-services-img03.jpg" alt=""/>--}}
{{--                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>--}}
{{--                                        </div>--}}
{{--                                        <div--}}
{{--                                            class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">--}}
{{--                                        <span--}}
{{--                                            class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Responsive</span>--}}
{{--                                            <div--}}
{{--                                                class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">--}}
{{--                                                True responsiveness modern responsive--}}
{{--                                            </div>--}}
{{--                                            <a href="about-us.html"--}}
{{--                                               class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn--}}
{{--                                                more</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end interactive banner item -->--}}
{{--                                <!-- start interactive banner item -->--}}
{{--                                <div class="swiper-slide interactive-banners-style-07">--}}
{{--                                    <div class="interactive-banners-box bg-dark-slate-blue">--}}
{{--                                        <div class="interactive-banners-box-image">--}}
{{--                                            <img src="images/home-business-services-img04.jpg" alt=""/>--}}
{{--                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>--}}
{{--                                        </div>--}}
{{--                                        <div--}}
{{--                                            class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">--}}
{{--                                        <span--}}
{{--                                            class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Modern</span>--}}
{{--                                            <div--}}
{{--                                                class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">--}}
{{--                                                Beautiful and modern latest page builder--}}
{{--                                            </div>--}}
{{--                                            <a href="about-us.html"--}}
{{--                                               class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn--}}
{{--                                                more</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- end interactive banner item -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- end slider -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-blue">
        <div class="container">
            <div class="row justify-content-center wow animate__fadeIn">
                <div class="col-12 col-xl-6 col-lg-7 col-sm-8 text-center margin-5-rem-bottom md-margin-5-rem-bottom">
                <span
                    class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">L’Afrique à cœur</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">UAA vous offre la
                        possibilité de contribuer positivement au développement du continent</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Navigation-LeftWindow icon-medium text-gradient-sky-blue-pink"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            {{--                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Powerfull theme options</span>--}}
                            <p>Récrute et mobilise des bénévoles autour de missions en mécénat de compétences et/ou
                                mécénat financier au profit de projet et start-up à fort impact sur le continent
                                africain</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn"
                     data-wow-delay="0.2s">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Cursor-Click2 icon-medium text-gradient-sky-blue-pink"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            {{--                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Unlimited layouts and styles</span>--}}
                            <p>Soutient le développement de projets à fort impact à travers du renforcement de
                                compétences des porteurs de projet et la mise en réseau de projets en phase d’amorçage
                                ou d’accélération </p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn"
                     data-wow-delay="0.4s">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Archery-2 icon-medium text-gradient-sky-blue-pink"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            {{--                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Developing an effective strategy</span>--}}
                            <p>Adopte une démarche communautaire et capitalise sur le réseau de chacun pour créer un
                                espace d’entraide, d’action, de soutien </p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 wow animate__fadeIn" data-wow-delay="0.6s">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Female icon-medium text-gradient-sky-blue-pink"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            {{--                            <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray">Automated testing and support</span>--}}
                            <p>Déploie une vision innovante du développement, inspirée d’un état de l’art des meilleurs
                                usages à l’échelle internationale</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="big-section cover-background" style="background-image:url({{asset('images/video.jpg')}});">
        <div class="opacity-extra-medium-2 bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-lg-8 col-md-10 text-center position-relative">
                    <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE"
                       class="popup-youtube video-icon-box video-icon-large position-relative d-inline-block margin-3-half-rem-bottom wow animate__bounceIn">
                            <span>
                                <span class="video-icon bg-neon-blue">
                                    <i class="icon-simple-line-control-play text-white"></i>
                                    <span class="video-icon-sonar"><span
                                            class="video-icon-sonar-afr bg-neon-blue"></span></span>
                                </span>
                            </span>
                    </a>
                    <h6 class="alt-font text-white font-weight-600 margin-45px-bottom md-margin-35px-bottom xs-margin-25px-bottom wow animate__fadeIn">
                        Chacun des membres de l’UAA est animé par une même envie d’apporter sa contribution à la mise en
                        œuvre de projets structurants à fort impact</h6>
{{--                    <span class="text-white alt-font text-uppercase letter-spacing-1px wow animate__fadeIn">Puissance et personnalisation illimitées</span>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
{{--    <section class="padding-100px-tb lg-padding-90px-tb md-padding-75px-tb wow animate__fadeIn">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 align-items-center justify-content-center">--}}
{{--                <!-- start counter item -->--}}
{{--                <div class="col text-center sm-margin-40px-bottom">--}}
{{--                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"--}}
{{--                        data-to="2530"></h4>--}}
{{--                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Working hours</span>--}}
{{--                </div>--}}
{{--                <!-- end counter item -->--}}
{{--                <!-- start counter item -->--}}
{{--                <div class="col text-center sm-margin-40px-bottom">--}}
{{--                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"--}}
{{--                        data-to="3200"></h4>--}}
{{--                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Photo capture</span>--}}
{{--                </div>--}}
{{--                <!-- end counter item -->--}}
{{--                <!-- start counter item -->--}}
{{--                <div class="col text-center xs-margin-40px-bottom">--}}
{{--                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"--}}
{{--                        data-to="2830"></h4>--}}
{{--                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Work completed</span>--}}
{{--                </div>--}}
{{--                <!-- end counter item -->--}}
{{--                <!-- start counter item -->--}}
{{--                <div class="col text-center">--}}
{{--                    <h4 class="vertical-counter d-inline-flex text-extra-dark-gray alt-font appear font-weight-600 letter-spacing-minus-2px md-letter-spacing-normal mb-0"--}}
{{--                        data-to="2060"></h4>--}}
{{--                    <span class="alt-font text-uppercase text-small d-block margin-5px-top">Telephonic talk</span>--}}
{{--                </div>--}}
{{--                <!-- end counter item -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- end section -->--}}
{{--    <!-- start section -->--}}
{{--    <section class="bg-light-blue">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-5-rem-bottom wow animate__fadeIn">--}}
{{--                <span--}}
{{--                    class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">CE QUE DISENT LES GENS</span>--}}
{{--                    --}}{{--                    <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">What our valuable--}}
{{--                    --}}{{--                        customer are saying about us?</h5>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row justify-content-center">--}}
{{--                <!-- start testimonial item -->--}}
{{--                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn"--}}
{{--                     data-wow-delay="0.2s">--}}
{{--                    <div class="testimonials testimonials-style-03 last-paragraph-no-margin">--}}
{{--                        <div--}}
{{--                            class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">--}}
{{--                            <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud--}}
{{--                                exercitation ullamco.</p>--}}
{{--                        </div>--}}
{{--                        <div class="author padding-20px-lr">--}}
{{--                            <img class="rounded-circle w-60px h-60px margin-15px-right" src="images/avtar28.jpg" alt="">--}}
{{--                            <div class="d-inline-block align-middle">--}}
{{--                            <span--}}
{{--                                class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Herman Miller</span>--}}
{{--                                <span class="d-block text-small">ThemeZaa Design</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- end testimonial item -->--}}
{{--                <!-- start testimonial item -->--}}
{{--                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn"--}}
{{--                     data-wow-delay="0.4s">--}}
{{--                    <div class="testimonials testimonials-style-03 last-paragraph-no-margin">--}}
{{--                        <div--}}
{{--                            class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">--}}
{{--                            <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud--}}
{{--                                exercitation ullamco.</p>--}}
{{--                        </div>--}}
{{--                        <div class="author padding-20px-lr">--}}
{{--                            <img class="rounded-circle w-60px h-60px margin-15px-right" src="images/avtar27.jpg" alt="">--}}
{{--                            <div class="d-inline-block align-middle">--}}
{{--                            <span--}}
{{--                                class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Jeremy Girard</span>--}}
{{--                                <span class="d-block text-small">Microsoft Corporation</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- end testimonial item -->--}}
{{--                <!-- start testimonial item -->--}}
{{--                <div class="col-12 col-lg-4 col-md-6 col-sm-8 wow animate__fadeIn" data-wow-delay="0.6s">--}}
{{--                    <div class="testimonials testimonials-style-03 last-paragraph-no-margin">--}}
{{--                        <div--}}
{{--                            class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr">--}}
{{--                            <p>Lorem ipsum dolor amet consectetur do tempor incididunt labore et dolore magna nostrud--}}
{{--                                exercitation ullamco.</p>--}}
{{--                        </div>--}}
{{--                        <div class="author padding-20px-lr">--}}
{{--                            <img class="rounded-circle w-60px h-60px margin-15px-right" src="images/avtar29.jpg" alt="">--}}
{{--                            <div class="d-inline-block align-middle">--}}
{{--                            <span--}}
{{--                                class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Alexander Harvard</span>--}}
{{--                                <span class="d-block text-small">ThemeZaa Design</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- end testimonial item -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end section -->
    <!-- start section -->
{{--    <section--}}
{{--        class="padding-100px-tb bg-light-blue border-top border-color-medium-gray lg-padding-90px-tb md-padding-75px-tb sm-padding-50px-tb wow animate__fadeIn">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 client-logo-style-05">--}}
{{--                <!-- start client logo item -->--}}
{{--                <div class="col text-center md-margin-40px-bottom xs-margin-50px-bottom wow animate__fadeIn">--}}
{{--                    <a href="#"><img src="images/client-logo-45.png" alt="" class="w-57"></a>--}}
{{--                </div>--}}
{{--                <!-- end client logo item -->--}}
{{--                <!-- start client logo item -->--}}
{{--                <div class="col text-center md-margin-40px-bottom xs-margin-50px-bottom wow animate__fadeIn"--}}
{{--                     data-wow-delay="0.2s">--}}
{{--                    <a href="#"><img src="images/client-logo-46.png" alt="" class="w-57"></a>--}}
{{--                </div>--}}
{{--                <!-- end client logo item -->--}}
{{--                <!-- start client logo item -->--}}
{{--                <div class="col text-center xs-margin-50px-bottom wow animate__fadeIn" data-wow-delay="0.4s">--}}
{{--                    <a href="#"><img src="images/client-logo-48.png" alt="" class="w-57"></a>--}}
{{--                </div>--}}
{{--                <!-- end client logo item -->--}}
{{--                <!-- start client logo item -->--}}
{{--                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.6s">--}}
{{--                    <a href="#"><img src="images/client-logo-47.png" alt="" class="w-57"></a>--}}
{{--                </div>--}}
{{--                <!-- end client logo item -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end section -->
    <!-- start section -->
{{--    <section>--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div--}}
{{--                    class="col-12 col-xl-5 col-lg-6 col-sm-8 text-center margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-1-rem-bottom wow animate__fadeIn">--}}
{{--                <span--}}
{{--                    class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">OBTENIR LES DERNIÈRES INFORMATIONS</span>--}}
{{--                    <h6 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px">Rester au courant--}}
{{--                        des dernières tendances et de l'actualité</h6>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 blog-content px-sm-0">--}}
{{--                    <ul class="blog-classic blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">--}}
{{--                        <li class="grid-sizer"></li>--}}
{{--                        <!-- start blog item -->--}}
{{--                        <li class="grid-item wow animate__fadeIn">--}}
{{--                            <div class="blog-post">--}}
{{--                                <div--}}
{{--                                    class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">--}}
{{--                                    <a href="blog-post-layout-01.html"><img src="images/home-business-blog-img01.jpg"--}}
{{--                                                                            alt=""/></a>--}}
{{--                                </div>--}}
{{--                                <div class="post-details">--}}
{{--                                    <a href="blog-post-layout-01.html"--}}
{{--                                       class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">The--}}
{{--                                        best way to predict the future is to create it</a>--}}
{{--                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem--}}
{{--                                        ipsum has dummy...</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- end blog item -->--}}
{{--                        <!-- start blog item -->--}}
{{--                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">--}}
{{--                            <div class="blog-post">--}}
{{--                                <div--}}
{{--                                    class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">--}}
{{--                                    <a href="blog-post-layout-02.html"><img src="images/home-business-blog-img02.jpg"--}}
{{--                                                                            alt=""/></a>--}}
{{--                                </div>--}}
{{--                                <div class="post-details">--}}
{{--                                    <a href="blog-post-layout-02.html"--}}
{{--                                       class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Winners--}}
{{--                                        make a habit of facturing positive</a>--}}
{{--                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem--}}
{{--                                        ipsum has dummy...</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- end blog item -->--}}
{{--                        <!-- start blog item -->--}}
{{--                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">--}}
{{--                            <div class="blog-post">--}}
{{--                                <div--}}
{{--                                    class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">--}}
{{--                                    <a href="blog-post-layout-03.html"><img src="images/home-business-blog-img03.jpg"--}}
{{--                                                                            alt=""/></a>--}}
{{--                                </div>--}}
{{--                                <div class="post-details">--}}
{{--                                    <a href="blog-post-layout-03.html"--}}
{{--                                       class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Computers--}}
{{--                                        are to design as microwaves are to cooking</a>--}}
{{--                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem--}}
{{--                                        ipsum has dummy...</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- end blog item -->--}}
{{--                        <!-- start blog item -->--}}
{{--                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s">--}}
{{--                            <div class="blog-post">--}}
{{--                                <div--}}
{{--                                    class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">--}}
{{--                                    <a href="blog-post-layout-05.html"><img src="images/home-business-blog-img04.jpg"--}}
{{--                                                                            alt=""/></a>--}}
{{--                                </div>--}}
{{--                                <div class="post-details">--}}
{{--                                    <a href="blog-post-layout-05.html"--}}
{{--                                       class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">--}}
{{--                                        A company is only as good as the people it keeps</a>--}}
{{--                                    <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem--}}
{{--                                        ipsum has dummy...</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <!-- end blog item -->--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end section -->
@endsection
