@extends('QuickMed.master')

@section('title')
	Welcome to QuickMed
@endsection

@section('contents')

<div class="nav">
	<ul class="list-unstyled list-inline">
	<li class="list-inline-item"><a href="#services">Services</a></li>
	<li class="list-inline-item"><a href="/register">Sign Up</a><li>
	</ul>
</div>


<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3" id="welcome">
						<img src="/img/quickmed2.png" class="img img-responsive">
						<form role="form" method="post" action="/search">
						<div class="form-group">
							<input type="text" name="location" class="form-control"  placeholder="Enter Your Location">
						</div>
						<div class="button">
							<button type="submit" class="btn btn-success">Reach Health Officer</button>
						</div>
				</form>
			</div>
		</div>
</div>
	</div>
	<div class="next">
	<div class="container">			
		<div class="row">
				<h1 class="lead text-center"> SERVICES AVAILABLE</h1>
				
				<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/midwife.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Midwife</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/doctor.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Medical Doctor</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/nurse.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Nurse</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="thumbnail">
	<img src="/img/physician.jpg" alt="Generic placeholder thumbnail" class="img-responsive img-rounded">
				</div>
		<div class="caption">
			<h4>Physician Assistant</h4>
				<p>He is the Caretakeer of the Church. He has served for
				 many years and we are looking forward to His replacement
				 when God reveals His successor to us.
				 </p>
		</div>
			</div>

		</div>
	</div>
</div>


@endsection