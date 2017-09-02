<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Devless\SDK\SDK;




class HomeController extends Controller
{   

    public function devless()
    {
        $devless = new SDK("http://localhost:4545", "a477d9d3c45f17cfe29cc30484050c08");
        return $devless;
    }

    public function index()
    {
    	return view('QuickMed.landing');
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

    	return back();
    }

    public function show()
    {
        //display names of all registered health personnels
        $personnels = $this->devless()->getData('QuickMed','personnel');
        return view('QuickMed.show',compact('personnels'));
    }


}
