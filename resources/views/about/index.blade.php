@extends('layouts.main')

@section('content')
    <!-- start page title -->
    <section class="parallax" data-parallax-background-ratio="0.5"
             style="background-image:url({{asset('images/piqsels.jpg')}});">
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
                                ANTONY BAH
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
