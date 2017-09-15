<!--For Main Page-->

@if ($message = Session::get('success'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert"><i class="fa fa-window-close-o"></i></button>
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block text-center">

	<button type="button" class="close" data-dismiss="alert"><i class="fa fa-window-close-o"></i></button>	

        <strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('warning'))

<div class="alert alert-warning alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('info'))

<div class="alert alert-info alert-block">

	<button type="button" class="close" data-dismiss="alert">×</button>	

	<strong>{{ $message }}</strong>

</div>

@endif


@if ($errors->any())
<!--<div class="alert alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>	Please check the form below for errors
</div> -->
	 @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
           </span>
    @endif  


  @if ($errors->has('email'))
          <span class="help-block">
              <strong>Email Address Already Registered</strong>
         </span>
  @endif


  @if ($errors->has('password'))
         <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
         </span>
  @endif

  @if ($errors->has('phone'))
      <span class="help-block">
          <strong>Phone Number has been used already</strong>
     </span>
  @endif

  @if ($errors->has('profession'))
              <span class="help-block">
                  <strong>{{ $errors->first('profession') }}</strong>
             </span>
      @endif

   @if ($errors->has('license'))
              <span class="help-block">
                  <strong>License number already Registered</strong>
             </span>
      @endif

 @if ($errors->has('id_num'))
              <span class="help-block">
                  <strong>ID number already Registered</strong>
             </span>
      @endif

      @if ($errors->has('location'))
              <span class="help-block">
                  <strong>{{ $errors->first('location') }}</strong>
             </span>
      @endif

@endif

