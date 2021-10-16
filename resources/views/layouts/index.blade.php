<!DOCTYPE html>
<html lang="en" data-random-animation="false" data-animation="19">
<head>

    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="vcard, resume, personal, portfolio, cv, card, responsive"/>
    <meta name="description" content="vCard / Resume / Personal Template"/>
    <meta name="author" content="cosmos-themes"/>
    <link rel="icon" type="image/png" href="{{asset('img/profile-img.jpg')}}" />

    <!--Page Title-->
    <title>
        @yield('title')
    </title>

    <!--Plugins Css-->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <!--Main Styles Css-->
    <link rel="stylesheet" href="{{asset('css/style-dark.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins/fontawesome.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/iranyekanwebblack.ttf')}}">
    <link rel="stylesheet" href="{{asset('fonts/iranyekanwebblack.woff')}}">

    <!--Color Css-->
    <link class="site-color" rel="stylesheet" href="{{asset('css/blue-color.css')}}">

    <!--Modernizr Js-->
    <script src="{{asset('js/modernizr.js')}}"></script>

    <!--Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122650090-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-122650090-3');
    </script>


</head>

<body>



    @yield('content')




<!--Ajax Portfolio Container Start-->
<div class="ajax-portfolio-popup">
    <span class="ajax-loader"></span>
    <div class="navigation-wrap">
        <span class="popup-close"><i class="fas fa-times-circle"></i></span>
    </div>
    <div class="content-wrap">
        <div class="popup-content"></div>
    </div>
</div>
<!--Ajax Portfolio Container End-->


<!--Jquery JS-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!--Plugins JS-->
<script src="{{asset('js/plugins.min.js')}}"></script>
<!--Google Map Api-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key="></script>
<!--Site Main JS-->
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/main-demo.js')}}"></script>


</body>
</html>

