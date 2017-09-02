@extends('QuickMed.master')



@section('contents')

<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">


	@if($personnels)

		@foreach($personnels['payload']['results'] as $personnel)
	<p>Name:{{$personnel['name']}}</p>
	<p>Profession:{{$personnel['profession'] }}</p>
	<p>Phone Number:{{$personnel['phone'] }}</p>
	<p>Location:{{$personnel['location'] }}</p>
	<hr>
		@endforeach
	@endif

	<a href="/index"><button>Go back</button></a>
</div>
</div>
</div>
@endsection