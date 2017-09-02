<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
		<title>@yield('title')</title>
	</head>
<body>

<!--Navigation
@yield('nav')-->

<!--Contents-->
@yield('contents')


<!--Footer
@yield('footer')-->

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<!--@yield('custom-scripts')-->

</body>
</html>
