<!doctype html>
<html class="no-js" lang="fr">
<head>
    <title>Litho – The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="description"
          content="Litho is a clean and modern design, BootStrap 5 responsive, business and portfolio multipurpose HTML5 template with 37+ ready homepage demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-icons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme-vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>
</head>
<body data-mobile-nav-style="classic">
<!-- start header -->
@include('partials.header')
<!-- end header -->
@yield('content')
<!-- start footer -->
@include('partials.footer')
<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
<!-- end scroll to top -->
<!-- javascript -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/theme-vendors.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>
