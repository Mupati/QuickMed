@extends('QuickMed.master')

@section('title')
    Dashboard | {{Auth::user()->name}}
@endsection

@section('contents')
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-offset-0 col-md-6 ">
<h3 class="text-center">Welcome {{Auth::user()->name}}</h3> 
<fieldset>
@if(Auth::user()->validated ==  1)
<legend>Status Update</legend>
<p>Your current status is set to: <strong class="msg">{{Auth::user()->status}}</strong></p>

<form role="form" id="update">
    {{ csrf_field()}}
    <div class="form-group">
            <label role="status" class="control-label">New Status</label>
            <select name="update_status" class="form-control" id="status">
                    <option disabled selected>Select Status</option>
                    <option>online</option>
                    <option>offline</option>
            </select>
	</div>
	<button type="submit" class="btn btn-block btn-success" >Update Status</button>
</form>
@else
<p>{{Auth::user()->name}}, your details are being verified. You will be contacted as soon as they are validated. Continue to be a good citizen as a health personnel.
</p>
@endif
<a href="/logout" onclick="event.preventDefault(); 
	document.getElementById('logout-form').submit();"> Logout</a>
<form id="logout-form" action="/logout" method="POST" style="display: none;">
     {{ csrf_field() }}
</form>

</fieldset>

                </div>  
        </div>
</div>
@endsection



@section('custom-scripts')  
<script>

$(document).ready(function(){
   $('#update').submit(function() {
        // var data = {
        //     '_token': $('input[name=_token]').val(),
        //     'update_status': $('#status').val() 
        // };
        //  var settings = {
        //         "async": true,
        //         "crossDomain": true,
        //         "url": "/status",
        //         "method": "POST",
        //         "processData": false,
        //         "data": data
        //       }
        // $.ajax(settings).done(function (response){
        //     console.log(response)
        // });
         var token = $('input[name=_token]').val();
         var status = $('#status').val();

         $.post('status',{'_token':token,'update_status':status},function(data){
             console.log(data);
         });
        //e.preventDefault();
        // $.ajax({
        //     url: '/status',
        //     type: "POST",
        //     processData: false,
        //     //dataType: "json",
        //     data: {
        //         '_token': $('input[name=_token]').val(),
        //         'update_status': $('#status').val()
        //     },
        //     success: function(data) {
        //     $('strong').replaceWith(data.status);
        //     }
    //     // });
    });


 });
   
</script>
@endsection