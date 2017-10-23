@extends('QuickMed.master')

@section('title')
	QuickMed | Home
@endsection

@section('nav')
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="nav1">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
		<span class="sr-only">Menu</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
		<a class="navbar-brand" href="#">QuickMed</a>
	</div>

<div class="collapse navbar-collapse pull-right" id="navbar-collapse">
	<form action="/login" method="post" class="nav-form form-inline" role="form">
		{{ csrf_field() }}
<div class="form-group">
	<input type="text" class="form-control" name="license" placeholder="License Number" value="{{old('license')}}" required autofocus>
</div>
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="Password" required>
</div>
	<button type="submit" class="btn btn-success">Login</button><br>
		<!--<a href="#" id="nav-link">Forgot your password?</a> The pass reset link = /password/reset
		<div class="form-group">
                <div class="checkbox">
<label><input type="checkbox" name="remember"> Remember Me</label>
				</div>
        </div>-->
	</form>
</div>
</nav>

<div class="nav2" id="nav2"><!--deleted classes  navbar navbar-default-->
   <div class="col-md-10 col-md-offset-1 text-center">
	<ul class="list-inline list-unstyled">
		<li><a href="#services">Services</a></li>
		<li><a href="/feedback">Feedback</a></li>
		<li><a href="/register">Sign Up</a></li>
	</ul>
	</div>
</div>

@endsection

@section('contents')

<div class="top text-center">
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			@include('QuickMed.partials.flash')
		</div>
	</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-8 col-md-offset-2" id="welcome">
				<img src="/img/quickmed2.png" class="img img-responsive">		
				<form role="form" method="post" action="/personnel">
							{{csrf_field()}}
						        <div class="form-group">
        							<input type="text" name="location" class="form-control"  placeholder="Enter Your Location">
        						</div>
							<button type="submit" class="btn btn-lg btn-success">Reach Health Officer <i class="fa fa-ambulance fa-lg fa-flip-horizontal"></i></button>
				</form>
			</div>
		</div>
</div>
</div>

	<div class="serv">
	<div class="container">			
		<div class="row" id="services">
				<h1 class="lead text-center"> PERSONNEL AVAILABLE</h1>
				
				<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/midwife.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Midwife</h4>
				<p>Midwives deliver babies and provide antenatal and postnatal advice, care and 
				support to women, their babies, their partners and families. Midwives need the 
				ability to deal with emotionally charged situations as part of their everyday work.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/doctor.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Medical Doctor</h4>
				<p>Medical Doctors diagnose and treat medical conditions, disorders, and diseases 
					through the application of specialist medical skills and knowledge.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/nurse.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Nurse</h4>
				<p>Nurses provide and coordinate patient care, educate patients and the public about 
				   various health conditions, and provide advice and emotional support to patients and their family members.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/physician.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Physician Assistant</h4>
				<p>They are formally trained to examine patients, diagnose injuries and illnesses, and provide treatment. Working as members of the health care team, PAs take medical histories, examine and treat patients, order and interpret laboratory tests and X-rays, make diagnoses, and prescribe medications
				 </p>
		</div>
			</div>

		</div>
	</div>
</div>


@endsection
{{--
@section('custom-scripts')
<script>
	// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 350) {        // If page is scrolled more than 50px
        $('#up').fadeIn(200);    // Fade in the arrow
    } else {
        $('#up').fadeOut(200);   // Else fade out the arrow
    }
});
$('#up').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 1000);
});
</script>
@endsection
--}}