@extends('QuickMed.master')

@section('title')
    Dashboard | {{Auth::user()->name}}
@endsection

@section('contents')
<div class="container" style="margin-top: 100px;">
<div class="row">

<div class="col-md-offset-0 col-md-6 ">
<h3 class="text-center">Welcome {{Auth::user()->name}}</h3> 
@if(Auth::user()->validated ==  1)
<fieldset>
<legend>Status Update</legend>
<p>Your current status is set to: <strong class="msg">{{Auth::user()->status}}</strong></p>

<form role="form"  class="update">
    {{ csrf_field()}}
    <div class="form-group">
            <label role="status" class="control-label">New Status</label>
            <select name="status" class="form-control" id="status">
                    <option disabled selected>Select Status</option>
                    <option>available</option>
                    <option>unavailable</option>
            </select>
	</div>
	<button type="submit" class="btn btn-block btn-success">Update Status</button>
</form>
@else
<p>{{Auth::user()->name}}, your details are being verified. You will be contacted as soon as they are validated. Continue to be a good citizen as a health personnel.
</p>

</fieldset>
@endif
<a href="/logout" onclick="event.preventDefault(); 
	document.getElementById('logout-form').submit();"> Logout</a>
<form id="logout-form" action="/logout" method="POST" style="display: none;">
     {{ csrf_field() }}
 </form>

</div>
</div>
</div>

@section('custom-scripts')
<script>
   $('.update').submit(function() {

        $.ajax({
            type: "post",
            url: '/status',
            data: {
                '_token': $('input[name=_token]').val(),
                'status': $('#status').val()
            },
            success: function(data) {
                $('strong').replaceWith(data.status);
            }
        });
    });

</script>
@endsection