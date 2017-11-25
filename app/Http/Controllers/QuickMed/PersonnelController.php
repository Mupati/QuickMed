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

      $this->validation($request);

    	$personnel = new Personnel;   
      $personnel->name	        =   $request->name;
      $personnel->email	        =   $request->email;
      $personnel->password      =   bcrypt($request->password);
      $personnel->phone_number  =   $request->phone;
    	$personnel->profession  	=   $request->profession;
    	$personnel->license  	    =   $request->license;
    	$personnel->id_number	 	  =   $request->id_num;
    	$personnel->location	    =   strtolower($request->location);
    					
      $personnel->save();

      return redirect('/index')->with('success','Subscription Successful, You will be contacted later. Thank You.');

  	}

   private function validation($request) {
            
            return $this->validate($request,[
              'name'=>'required',
              'email'=>'unique:personnels,email|required|string|max:255',
              'password'=>'required|string|min:6|confirmed',
              'phone'=>'unique:personnels,phone_number|required',
              'profession'=>'required',
              'license'=>'unique:personnels,license|required',
              'id_num'=>'unique:personnels,id_number|required',
              'location'=>'required',
              ]);      
          }   

}
