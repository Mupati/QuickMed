@extends('QuickMed.master')

@section('title')
	QuickMed | Personnel Available
@endsection


@section('contents')
<div class="show">
<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Search Results for "{{$query}}"</h3>
				</div>
				@if($personnels)
				@foreach($personnels as $personnel)

				<div class="panel-body">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title text-center">{{$personnel->name}}</h3>
						</div>
						<table class="table">
                <tr><td><strong><i class="fa fa-user-md fa-2x"></i></strong></td><td>{{$personnel->profession}}</td></tr>
                <tr><td><strong><i class="fa fa-phone-square fa-2x"></i></strong></td><td>{{$personnel->phone_number}}</td></tr>
                 <tr><td><strong><i class="fa fa-map-marker fa-2x"></i></strong></td><td>{{$personnel->location}}</td></tr>
                        </table>
					</div>
				</div>
			</div>
				@endforeach
				@endif
			</div>
			<a href="/index"><button class="btn btn-lg btn-success" style="padding: 10px;"><i class="fa fa-angle-double-left"></i> Go Back</button></a>
		</div>
	</div>

	<div class="loader"></div>


</div>
</div>
@endsection