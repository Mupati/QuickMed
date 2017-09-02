@extends('QuickMed.master')

@section('title')
	Welcome to QuickMed
@endsection

@section('contents')

<div class="nav">
	<a href="/register">Sign Up</a>
</div>


<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2" id="welcome">
				<img src="/img/quickmed.png" class="img img-responsive">
						
						<h1 class="text-center lead"> QuickMed</h1>
					 		<em>Immediate Response to Your Health Needs</em>
						
						<form role="form" method="post" action="/search">
						<div class="form-group">
							<input type="text" name="location" class="form-control" placeholder="Enter Your Location">
						</div>
						<div class="col-md-3 col-md-offset-6" >
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
			<div class="col-sm-3 col-md-3">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			</div>

			<div class="col-sm-3 col-md-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<p>
			</div>

			<div class="col-sm-3 col-md-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<p>
			</div>
			<div class="col-sm-3 col-md-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<p>

			</div>

		</div>
	</div>
</div>


@endsection