<section class="wow animate__fadeIn parallax" data-parallax-background-ratio="0.5" style="background-image: url({{asset('images/two.jpg')}})">
    <div class="opacity-medium bg-gradient-fast-blue-purple"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative">
                <div class="text-center bg-white border-radius-6px padding-7-rem-all sm-padding-5-rem-all xs-padding-4-rem-all">
                    <span class="alt-font font-weight-500 text-fast-blue d-block text-uppercase margin-10px-bottom">COMMENÇONS MAINTENANT</span>
                    <h6 class="alt-font font-weight-500 d-inline-block text-extra-dark-gray letter-spacing-minus-1px w-90 lg-w-85 sm-w-55 xs-w-100 margin-3-half-rem-bottom">Ne manquez pas ces dernières nouvelles et opportunités !</h6>
                    <!-- start contact form -->
                    <form action="https://lithohtml.themezaa.com/email-templates/subscribe-newsletter.php" method="post">
                        <input class="medium-input border-radius-5px margin-25px-bottom" type="text" name="name" placeholder="Your name" />
                        <input class="medium-input border-radius-5px margin-25px-bottom required" type="email" name="email" placeholder="Your email address" />
                        <input type="hidden" name="redirect" value="">
                        <button class="btn btn-large btn-dark-gray btn-round-edge w-100 no-margin-bottom submit" type="submit">s'abonner à la newsletter</button>
                        <div class="form-results border-radius-5px d-none"></div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start footer  -->
<footer class="footer-dark bg-slate-blue">
    <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
        <div class="container">
            <div class="row">
                <!-- start footer column -->
                <div class="col-12 col-lg-4 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">UAA</span>
                    <ul>
                        <li><a href="{{route('about')}}">A propos</a></li>
                        <li><a href="{{route('projects')}}">Projets</a></li>
                        <li><a href="{{route('involve')}}">S'impliquer</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-4 col-sm-6 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Prendre contact</span>
                    <p class="w-85 margin-15px-bottom">102-2727 RUE Saint-Patrick,Montréal Québec H3K0A8, Canada</p>
                    <div><i class="feather icon-feather-phone-call icon-very-small margin-10px-right text-white"></i>1-877-316-7786</div>
                    <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a href="#">contact@uaa.com</a></div>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-4 col-sm-6">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">Follow us on Instagram</span>
{{--                    <div class="w-100 d-inline-block margin-10px-top">--}}
{{--                        <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small" data-total="3">--}}
{{--                            <li class="grid-item"><figure><a href="#" data-href="{{link}}" target="_blank"><img src="#" data-src="{{image}}" class="insta-image" alt="" /><span class="insta-counts"><i class="fab fa-instagram"></i>{{likes}}</span></a></figure></li>--}}
{{--                        </ul>--}}
{{--                        <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">Follow instagram</span></a>--}}
{{--                    </div>--}}
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
        <div class="container">
            <div class="row align-items-center">
{{--                <div class="col-12 col-md-3 text-center text-md-start sm-margin-20px-bottom">--}}
{{--                    <a href="{{url('/')}}" class="footer-logo"><img src="{{asset('images/logo_uaa.png')}}" data-at2x="images/logo-white@2x.png" alt=""></a>--}}
{{--                </div>--}}
                <div class="col-12 col-md-6 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                    <p>&copy; {{date('y')}} UAA is Proudly Powered by <a href="https://www.totem-experience.com/" target="_blank">Totem Experience</a></p>
                </div>
                <div class="col-12 col-md-3 text-center text-md-end">
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            <li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="instagram" href="http://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
