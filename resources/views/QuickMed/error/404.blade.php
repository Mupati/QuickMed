{{-- <!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="/n-css/custom.css">
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">-->
		
        <link rel="stylesheet" type="text/css" href="/n-css/custom.css">
        
        <!--<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<title>404 Page Error</title>
</head>
<body id="errorpage" class="main">

<div class="container" style="padding-top: 50px;">
<h1 class="text-center">QuickMed</h1>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p>
				Page 
				
			</p>			
		</div>
	</div>
	<div class="row">
		<div class="col-md-2 col-md-offset-2">
			<ul class="list">
				<a href="/"><li>Home</li></a>
			</ul>
		</div>
		<div class="col-md-2 col-md-offset-2">
		    <div class="pull-right">
		        <a href="#"><i class="fa fa-3x fa-facebook"></i></a>
		        <a href="#"><i class="fa fa-3x fa-twitter"></i></a>
		        <a href="#"><i class="fa fa-3x fa-instagram"></i></a>
    		</div>
		</div>
	</div>
</div>

</body>
</html> --}}



@extends("QuickMed.master")

@section('relative-css')
	<link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&subset=latin-ext,vietnamese" rel="stylesheet">
@endsection

@section('title')
	Error! Page Not Found
@endsection





@section('contents')
<div id="errorpage">
<div class="container" style="padding-top: 50px;">
	<h2 class="text-center">404 Error!</h2>
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
		<img src="/img/love.gif" class="img-responsive">
			<p>
				The page you are looking for has been removed,had its name changed or temporarily unavailable.<br>
				<a href="/" class="pull-left">Home</a>
			</p>
		</div>
	</div>
</div>
</div>
@endsection