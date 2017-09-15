<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuickMed\Personnel;



class PersonnelController extends Controller
{
    public function showRegistrationForm()
    {   
        return view('QuickMed.form.personnel');
    }

    public function register(Request $request)
    {   //Personnel Registration Method
    	$personnel = new Personnel;   
      $personnel->name	        =   $request->name;
      $personnel->email	        =   $request->email;
      $personnel->password      =   bcrypt($request->password);
      $personnel->phone_number  =   $request->phone;
    	$personnel->profession  	=   $request->profession;
    	$personnel->license  	    =   $request->license;
    	$personnel->id_number	 	  =   $request->id_num;
    	$personnel->location	    =   $request->location;
    					
      $personnel->save();

      return redirect('/index')->with('success','Subscription Successful, You will be contacted later. Thank You.');

	}
}
