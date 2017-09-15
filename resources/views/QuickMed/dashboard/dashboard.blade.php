@extends('QuickMed.master')

@section('contents')
<div class="container" style="margin-top: 100px;">
<div class="row">
<div class="col-md-offset-0 col-md-6 ">

<fieldset>
<legend>Change Your Status</legend>

<form role="form" method="post" action="/status">
    <div class="form-group">
            <label role="profession" class="control-label">Profession</label>
            <select name="status" class="form-control" ">
                    <option disabled selected>Select Status</option>
                    <option>Available</option>
                    <option>Unavailable</option>
            </select>
	</div>
	 <button type="submit" class="btn btn-block btn-success">Register</button>
</form>

</fieldset>

</div>
</div>
</div>
