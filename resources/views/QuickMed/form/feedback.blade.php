@extends('QuickMed.master')

@section('contents')
<div class="nice container" style="margin-top: 5px;">
  
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @include('QuickMed.partials.flash')
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
    <fieldset>
        <legend class="text-center">User Feedback Form</legend>
            <form role="form" method="post" action="/feedback">
                {{ csrf_field() }}
                <div class="form-group">
                    <label role="name" class="control-label">Name</label>
                    <input type="text" name="name" class="form-control" required> 
                </div>

                <div class="form-group">
                    <label role="email" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label role="message" class="control-label">Your Comments</label>
                    <textarea name="message" class="form-control"></textarea> 
                </div>
                    <button type="submit" class="btn btn-block btn-success">Submit</button><br>
                    <a href="/index"><button class="btn btn-block btn-primary">Go Back</button></a>
            </form>
    </fieldset>
        </div>
    </div>
</div>
@endsection