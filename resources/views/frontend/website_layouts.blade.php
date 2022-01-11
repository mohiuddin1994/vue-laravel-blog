<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Flattern - Flat and trendy bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend/css/bootstrap-responsive.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend/css/fancybox/jquery.fancybox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/jcarousel.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend/css/flexslider.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="{{('frontend/skins/default.css')}}" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/ico/apple-touch-icon-144-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/ico/apple-touch-icon-114-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/ico/apple-touch-icon-72-precomposed.png')}}" />
  <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/ico/apple-touch-icon-57-precomposed.png')}}" />
  <link rel="shortcut icon" href="{{asset('frontend/ico/favicon.png')}}" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
@yield('website_content')

 <!-- Placed at the end of the document so the pages load faster -->
 <script src="{{asset('frontend/js/jquery.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
 <script src="{{asset('frontend/js/bootstrap.js')}}"></script>
 <script src="{{asset('frontend/js/jcarousel/jquery.jcarousel.min.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.fancybox.pack.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.fancybox-media.js')}}"></script>
 <script src="{{asset('frontend/js/google-code-prettify/prettify.js')}}"></script>
 <script src="{{asset('frontend/js/portfolio/jquery.quicksand.js')}}"></script>
 <script src="{{asset('frontend/js/portfolio/setting.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.flexslider.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.nivo.slider.js')}}"></script>
 <script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.ba-cond.min.js')}}"></script>
 <script src="{{asset('frontend/js/jquery.slitslider.js')}}"></script>
 <script src="{{asset('frontend/js/animate.js')}}"></script>

 <!-- Template Custom JavaScript File -->
 <script src="{{asset('frontend/js/custom.js')}}"></script>

</body>
</html>
