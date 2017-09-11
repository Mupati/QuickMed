@extends('QuickMed.master')

@section('title')
	Subscribe to QuickMed
@endsection

@section('contents')

<div class="container" style="margin-top: 75px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<p>Click to View Available Personnel</p>
<a href="/display_personnel"><button class="btn btn-md">QuickMed</button></a><br>
		
		@include('QuickMed.form.personnel')
			
		</div>
	</div>
	<div class="row">

		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>

</div>

@endsection