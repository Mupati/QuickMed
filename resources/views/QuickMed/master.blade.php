<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, maximum-scale=1">
      <!--  <link rel="apple-touch-icon" sizes="57x57" href="/img/QuickMed/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/img/QuickMed/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/img/QuickMed/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/img/QuickMed/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/img/QuickMed/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/img/QuickMed/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/img/QuickMed/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/img/QuickMed/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/QuickMed/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/img/QuickMed/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/QuickMed/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/img/QuickMed/favicon-96x96.png"> -->
        <link rel="icon" type="image/png" sizes="16x16" href="/img/QuickMed/favicon-16x16.png">
      <!--  <link rel="manifest" href="/img/QuickMed/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/img/QuickMed/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff"> -->
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
        <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
		<title>@yield('title')</title>
	</head>
<body>

<!--Navigation-->
@yield('nav')







<!--Contents-->
@yield('contents')


<!--Footer-->

<footer> 
<div class="container">
<div class="row">
	&copy;2017 Powered by Team QuickMed &reg;
    <div class="pull-right">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#">Top</a>
    </div>
</div>
</div>
</footer>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
{{--@yield('custom-scripts')--}}

</body>
</html>
