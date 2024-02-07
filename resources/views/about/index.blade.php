@extends('layouts.main')

@section('content')
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
             style="background-image:url('images/about-us-bg.jpg');">
        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-stretch justify-content-center small-screen">
                <div
                    class="col-12 position-relative page-title-extra-small text-center d-flex align-items-center justify-content-center flex-column">
                    <h1 class="alt-font text-white opacity-6 margin-20px-bottom">A propos de nous</h1>
                    <h2 class="text-white alt-font font-weight-500 w-55 md-w-65 sm-w-80 center-col xs-w-100 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Union des Actions pour l'Afrique</h2>
                </div>
                <div class="down-section text-center"><a href="#about" class="section-link"><i
                            class="ti-arrow-down icon-extra-small text-white bg-transparent-black padding-15px-all xs-padding-10px-all border-radius-100"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 md-margin-50px-bottom wow animate__fadeIn">
                    <!-- start slider -->
                    <div
                        class="swiper-container white-move border-all border-width-12px border-color-white box-shadow-large border-radius-8px"
                        data-slider-options='{ "slidesPerView": 1, "loop": true, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide"><img src="{{asset('images/about-us-img-08.jpg')}}" alt=""></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><img src="{{asset('images/about-us-img-09.jpg')}}" alt=""></div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide"><img src="{{asset('images/about-us-img-10.jpg')}}" alt=""></div>
                            <!-- end slider item -->
                        </div>
                        <!-- start slider navigation -->
                        <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-01 light"><i
                                class="feather icon-feather-arrow-right" aria-hidden="true"></i></div>
                        <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-01 light"><i
                                class="feather icon-feather-arrow-left" aria-hidden="true"></i></div>
                        <!-- end slider navigation -->
                    </div>
                    <!-- end slider -->
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 wow animate__fadeIn" data-wow-delay="0.2s">
                    <h5 class="alt-font text-extra-dark-gray text-justify font-weight-500">
                        Présentation de la structure.</h5>
                    <p>L’Union des Actions pour l’Afrique (UAA) est une ONG. Une structure innovante,
                        regroupant tous les atouts de la diaspora africaine, afin de réaliser des projets
                        structurants à fort impact pour le développement durable de l'Afrique.
                        Elle mutualise des moyens d’actions, des ressources humaines et financières.
                        Elle est un groupe d’action pour une Afrique prospère, une Afrique qui gagne.
                    </p>
                    <h5 class="alt-font text-extra-dark-gray text-justify font-weight-500">
                        3 pilliers de notre vision.</h5>
                    <ul class="p-0 list-style-02 margin-2-rem-top margin-3-rem-bottom">
                        <li class="margin-15px-bottom"><i
                                class="feather icon-feather-arrow-right-circle text-large text-fast-blue margin-10px-right"
                                aria-hidden="true"></i><span class="text-extra-dark-gray alt-font">Contribuer à identifier les opportunités de développement du continent</span>
                        </li>
                        <li class="margin-15px-bottom"><i
                                class="feather icon-feather-arrow-right-circle text-large text-fast-blue margin-10px-right"
                                aria-hidden="true"></i><span class="text-extra-dark-gray alt-font">Inciter l’ensemble de la diaspora africaine à se mobiliser pour investir dans des projets innovants et durables qui profitent au plus grand nombre</span>
                        </li>
                        <li class="margin-15px-bottom"><i
                                class="feather icon-feather-arrow-right-circle text-large text-fast-blue margin-10px-right"
                                aria-hidden="true"></i><span class="text-extra-dark-gray alt-font">Activer l’apport  économique de la diaspora en Afrique.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-light-gray wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-sm-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                    <span class="text-extra-medium margin-15px-bottom alt-font d-block w-100">Union des Actions pour l'Afrique</span>
                    <p class="alt-font text-extra-dark-gray font-weight-500 margin-2-rem-bottom sm-w-100">
                        UAA est une organisation fondée par des africains qui ont la volonté d’unir leur force et pris conscience de l’intérêt d’agir ensemble pour contribuer au développement de l’Afrique </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Navigation-LeftWindow icon-medium text-fast-blue"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <p>La diaspora est le premier partenaire du continent, 1ère source de financement du continent africain</p>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Cursor-Click2 icon-medium text-fast-blue"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <p>Instaurer un climat de confiance entre la diaspora qui souhaite investir en Afrique et les porteurs de projets à valeur ajoutée</p>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-Like-2 icon-medium text-fast-blue"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <p>La nécessité de pouvoir tracer les flux financiers</p>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-12 col-lg-6 col-md-9">
                    <div
                        class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small feature-box-dark-hover overflow-hidden padding-4-rem-all">
                        <div class="feature-box-icon">
                            <i class="line-icon-One-FingerTouch icon-medium text-fast-blue"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <p>Les entrepreneurs manquent de visibilité bien que leurs projets soient porteurs de sens</p>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-slate-blue overlap-height xs-no-padding wow animate__fadeIn">
        <div class="container xs-no-padding">
            <div class="row align-items-center overlap-gap-section no-margin-lr">
                <div class="col-12 col-lg-6 align-self-lg-stretch p-0 cover-background md-h-400px wow animate__fadeIn"
                     style="background-image:url('images/about-us-img-06.jpg');"></div>
                <div class="col-12 col-lg-6 p-0 text-center wow animate__fadeIn" data-wow-delay="0.2s">
                    <div
                        class="bg-gradient-sky-blue-pink padding-6-rem-lr padding-7-rem-tb lg-padding-4-rem-lr lg-padding-5-rem-tb md-padding-5-rem-all">
                        <a href="https://www.youtube.com/watch?v=g0f_BRYJLJE"
                           class="popup-youtube video-icon-box video-icon-large position-relative margin-50px-bottom d-block">
                                <span>
                                    <span class="video-icon bg-white">
                                        <i class="icon-simple-line-control-play text-gradient-light-purple-light-orange"></i>
                                        <span class="video-icon-sonar">
                                            <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                            <span class="video-icon-sonar-afr bg-white"></span>
                                        </span>
                                    </span>
                                </span>
                        </a>
                        <span class="text-extra-medium alt-font margin-20px-bottom d-block text-white opacity-7">Union des Actions pour l'Afrique</span>
                        <h6 class="alt-font text-white font-weight-500 margin-40px-bottom xs-margin-20px-bottom">UAA contribue à identifier les opportunités de développement du continent de façon à activer l’apport économique de la diaspora en Afrique </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn pt-md-0 pb-md-0 overflow-visible sm-border-bottom sm-border-color-medium-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center no-margin-lr overlap-section">
                <div
                    class="col-12 box-shadow-medium bg-white align-items-center padding-4-rem-all sm-no-padding-tb sm-padding-15px-lr sm-box-shadow-none">
                    <div class="row row-cols-1 row-cols-md-3">
                        <!-- start counter item -->
                        <div
                            class="col border-right border-color-medium-gray text-center sm-no-border-right sm-margin-30px-bottom">
                            <h4 class="text-fast-blue alt-font font-weight-500 mb-xl-0 d-inline-block align-middle w-130px lg-w-100 counter"
                                data-speed="2000" data-to="1227"></h4>
                            <div class="d-inline-block align-middle text-center text-xl-start">
                                <span class="alt-font text-extra-dark-gray font-weight-500 line-height-14px d-block ">Winning awards</span>
                                <span class="alt-font">For creative design</span>
                            </div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div
                            class="col border-right border-color-medium-gray text-center sm-no-border-right sm-margin-30px-bottom">
                            <h4 class="text-fast-blue alt-font font-weight-500 mb-xl-0 d-inline-block align-middle w-130px lg-w-100 counter"
                                data-speed="2000" data-to="1947"></h4>
                            <div class="d-inline-block align-middle text-center text-xl-start">
                                <span class="alt-font text-extra-dark-gray font-weight-500 line-height-14px d-block">Working hours</span>
                                <span class="alt-font">Desperate for work</span>
                            </div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col text-center">
                            <h4 class="text-fast-blue alt-font font-weight-500 mb-xl-0 d-inline-block align-middle w-130px lg-w-100 counter"
                                data-speed="2000" data-to="1587"></h4>
                            <div class="d-inline-block align-middle text-center text-xl-start">
                                <span class="alt-font text-extra-dark-gray font-weight-500 line-height-14px d-block">Happy clients</span>
                                <span class="alt-font">We love clients</span>
                            </div>
                        </div>
                        <!-- end counter item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-4-half-rem-bottom sm-margin-3-rem-bottom">
                    <span class="alt-font text-extra-medium">Equipe</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-500">Membres Fondateurs</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1 justify-content-center">
                <!-- start team item -->
                <div class="col team-style-02 text-center sm-margin-15px-bottom wow animate__fadeIn"
                     data-wow-delay="0.2s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/achille.jpeg/')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am Creative</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                Achille Ubalijoro
                            </div>
                            <span class="text-small text-uppercase">Conseiller de Direction Projet et Coach d’Affaires chez Kabera Consulting Inc</span>
                        </figcaption>

                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center sm-margin-15px-bottom wow animate__fadeIn"
                     data-wow-delay="0.4s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/souad-1.jpg')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am trendy</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                SOUAD ELMALLEM
                            </div>
                            <span class="text-small text-uppercase">Personnalité publique de la communauté des affaires africaine et nord-américaine</span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/téléchargement (1).jpeg')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am punctual</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                CHAMS DIAGNE
                            </div>
                            <span class="text-small text-uppercase">Diplômé de l’Institut du Marketing et du Management de la Distribution de Lille, et de l’ICD Business </span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/téléchargement.jpeg')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am punctual</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                CLAUDEI TCHOKANTE
                            </div>
                            <span class="text-small text-uppercase">Gestionnaire versatile qui compte plus de 20 ans d’expérience</span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/indira.jpg')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am punctual</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                INDIRA MOUDI
                            </div>
                            <span class="text-small text-uppercase">Dirigeante d'entreprise visionnaire
                                dont l'expérience couvre des entreprises multinationales, internationales, régionales et locales en Europe, en Asie, en Afrique et en Amérique du Nord. Elle est actuellement PDG de Viandes Lafrance,
                                un leader de l'industrie de la viande basé au Québec, au Canada. </span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/Antony-b.jpg')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am punctual</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                ANTHONY BAH
                            </div>
                            <span class="text-small text-uppercase">Diplômé de L'EFREI (École d'ingénieur Généraliste du Numérique), et de l’IIM Digital School (Pôle Universitaire Léonard de Vinci)</span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
                <!-- start team item -->
                <div class="col team-style-02 text-center wow animate__fadeIn" data-wow-delay="0.6s">
                    <figure>
                        <div class="team-member-image border-radius-5px overflow-hidden">
                            <img alt="" src="{{asset('teams/Fidele.png')}}">
                            <div
                                class="team-member-details bg-transparent-gradient-light-purple-light-orange padding-2-half-rem-lr align-items-center justify-content-center d-flex flex-column">
                                <div class="text-white text-uppercase alt-font font-weight-500">I am punctual</div>
                                <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                    <a href="https://www.facebook.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i
                                            aria-hidden="true" class="fab fa-twitter"></i></a>
                                    <a href="https://www.dribbble.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-dribbble"></i></a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                       class="icon-very-small text-white"><i aria-hidden="true"
                                                                             class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <figcaption class="team-member-position padding-35px-tb text-center">
                            <div
                                class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                                FIDELE GERARD Gerard TOGHOUA
                            </div>
                            <span class="text-small text-uppercase">Cadre exécutif ayant plus de 20 ans d’expérience dans le domaine du numérique et des télécommunications</span>
                        </figcaption>
                    </figure>
                </div>
                <!-- end team item -->
            </div>
            <div class="bg-medium-light-gray margin-6-rem-bottom margin-3-rem-top w-100 h-1px"></div>
        </div>
    </section>
    <!-- end section -->
@endsection
