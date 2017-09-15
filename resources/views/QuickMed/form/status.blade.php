@extends('QuickMed.master')

@section('contents')
<div class="container" style="margin-top: 5px;">
    
<div class="row">

<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
<fieldset>
    <legend class="text-center">Personnel Status</legend>
<form role="form" method="post" action="/status">
                {{ csrf_field() }}

                <div class="form-group">
                <label role="status" class="control-label">Status</label>
                <select name="status" class="form-control" required>
                    <option disabled selected>---Indicate Status---</option>
                    <option>Available</option>
                    <option>Unavailable</option>
                </select>
                </div>
<button type="submit" class="btn btn-block btn-success">Submit</button><br>
</form>
<a href="/index"><button class="btn btn-block btn-primary">Go Back</button></a>
</fieldset>

            </div>
        </div>
    </div>
@endsection