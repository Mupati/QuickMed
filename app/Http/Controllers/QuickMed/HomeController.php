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
        $devless = new \SDK("http://localhost:4545", "37d8767c2073d3e58981b6e9e9e0fabe");
        return $devless;
    }


    public function index()
    {   //the HomePage
    	return view('QuickMed.index');
    }

    //login personnel
    //you can use status code 628 to check if user is not authenticated(loggedin) to access a particular route
    public function login(Request $request)
    { 
        $token = $this->devless()->call('devless','login',
                ['license'=>$request->license,'password'=>$request->password]);
        dd($token);
        $this->devless()->setUserToken($token['payload']['result']);
        dd($this->devless()->setUserToken($token['payload']['result']));
            return view('QuickMed.form.status');
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
    

    public function status()
    {   
        return back()->with('success','Status updated');
    }
    


}
