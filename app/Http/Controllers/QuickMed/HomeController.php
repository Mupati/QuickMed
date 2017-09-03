<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Devless\SDK\SDK;




class HomeController extends Controller
{   

    private function devless()
    {
        $devless = new SDK("http://localhost:4545", "a477d9d3c45f17cfe29cc30484050c08");
        return $devless;
    }

    public function index()
    {
    	return view('QuickMed.landing');
    }


    public function showRegistrationForm()
    {
        return view('QuickMed.form.personnel');
    }


    public function register(Request $request)
    {
    	$personnel = ['name'=>		$request->name,
    				  'profession'=>$request->profession,
    				  'license'=>	$request->license,
    				  'phone'=>		$request->phone,
    				  'location'=>	$request->location
    					];
    	$this->devless()->addData('QuickMed', 'personnel', $personnel);
    	return redirect('/index')->with('success','Subscription Successful, You will be contacted later. Thank You.');
    }

    public function show()
    {
        //display names of all registered health personnels
        $personnels = $this->devless()->getData('QuickMed','personnel');
        return view('QuickMed.show',compact('personnels'));
    }



    public function showFeedbackForm()
    {
        return view('QuickMed.form.feedback');
    }

    public function feedback(Request $request)
    {
        $feedback = ['name'=>$request->name,
                     'email'=>$request->email,
                     'message'=>$request->message
                    ];
        $this->devless()->addData('QuickMed','feedback',$feedback);

        return back()->with('success','Thank You for the feedback');
    }


}
