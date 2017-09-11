<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use Devless\SDK\SDK;
include base_path().'/vendor/devless/php-sdk/src/SDK.php';

class HomeController extends Controller
{   

    private function devless()
    {   //my devless instance
        $devless = new \SDK("http://localhost:4545", "a477d9d3c45f17cfe29cc30484050c08");
        return $devless;
    }


    public function index()
    {   //the HomePage

    	return view('QuickMed.index');
    }


    public function showRegistrationForm()
    {   //Personnel Registration Form
        return view('QuickMed.form.personnel');
    }


    public function register(Request $request)
    {   //Personnel Registration Method
    	$personnel = ['name'=>		$request->name,
    				  'profession'=>$request->profession,
    				  'license'=>	$request->license,
    				  'phone'=>		$request->phone,
    				  'location'=>	$request->location
    					];
    	$this->devless()->addData('QuickMed', 'personnel', $personnel);
    	return redirect('/index')->with('success','Subscription Successful, You will be contacted later. Thank You.');
    }


    public function showFeedbackForm()
    {   //User feedback form
        return view('QuickMed.form.feedback');
    }

    public function feedback(Request $request)
    {   //Feedback Storage Method
        $feedback = ['name'=>$request->name,
                     'email'=>$request->email,
                     'message'=>$request->message
                    ];
        $this->devless()->addData('QuickMed','feedback',$feedback);
        return back()->with('success','Thank You for the feedback');
    }

    public function showPersonnel(Request $request)
    {  
        $query = $request->location;
        if(!$query){
             return back()->with('error','Enter Location to Search');
        }
        $personnels = $this->devless()->orWhere('location',$query)->search('location',$query)->getData('QuickMed', 'personnel');
        if (!$personnels['payload']['results']){
            return redirect('/index')->with('error','Health Personnel Not Available in your Location');      
        }
        return view('QuickMed.show',compact('personnels','query'));
        }
    


}
