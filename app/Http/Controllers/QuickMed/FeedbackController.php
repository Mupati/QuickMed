<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuickMed\Feedback;

class FeedbackController extends Controller
{
    
    public function showFeedbackForm()
    {   
        return view('QuickMed.form.feedback');
    }

    public function feedback(Request $request)
    {   //Feedback Storage Method

        $feedback = new Feedback;
        $feedback->name             =	$request->name;
        $feedback->email            =	$request->email;
        $feedback->phone_number	    =	$request->phone;
        $feedback->comment 			=	$request->message;
         
        $feedback->save();

        return back()->with('success','Thank You for the feedback');
    }

     public function validation($request) {
            
            return $this->validate($request,[
              'name'=>'unique:memberships,name|required|string|max:255',
              'uname'=>'unique:memberships,username|required|nullable',
              'phone'=>'unique:memberships,phone_number|required',
              'email'=>'unique:memberships,email|nullable',
              'password'=>'required|string|min:6|confirmed'
              ]);      
          }      
      
}
