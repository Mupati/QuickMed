@extends('QuickMed.master')

@section('contents')
<div class="fdbk">
<div class="container" style="margin-top: 5px;" id="pers">
    
<div class="row">

<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">

    <fieldset>
        <legend class="text-center">Personnel Subscription Form</legend>

<form role="form" method="post" action="/register">
                {{ csrf_field() }}
            <div class="form-group">
                    <label role="name" class="control-label">Name</label>
                    <input type="text" name="name" placeholder="Dr. Kofi Obrasi Ocran" class="form-control" required> 
                </div>

                <div class="form-group">
                <label role="profession" class="control-label">Profession</label>
                <select name="profession" class="form-control" required>
                    <option disabled selected>Select Profession</option>
                    <option>Medical Doctor</option>
                    <option>Nurse</option>
                    <option>Midwife</option>
                    <option>Physician Assistant</option>
                </select>
                </div>

                <div class="form-group">
                    <label role="license_number" class="control-label">License Number</label>
                    <input type="text" name="license" class="form-control" placeholder="245-5658-987" required>
                </div>

                <div class="form-group">
                    <label role="phone_number" class="control-label">Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="+233546107464" required>
                </div>

                <div class="form-group">
                    <label role="location" class="control-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Madina Zongo" required>
                </div>
            <button type="submit" class="btn btn-block btn-success">Register</button><br>
        </form>
        <a href="/index"><button class="btn btn-block btn-primary">Go Back</button></a>

        </fieldset>

            </div>
        </div>
    </div>
</div>
@endsection
