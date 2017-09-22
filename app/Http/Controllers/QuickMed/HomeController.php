<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{   

    public function index()
      {  
    	return view('QuickMed.index');
      }

    public function searchPersonnel(Request $request)
    {  
        $query = $request->location;
        if(!$query){
             return back()->with('error','Enter Location to Search');
        }
    $personnels = DB::table('personnels')->where(function ($search) use ($query){
               $search->where([ 
                    ['status','available'],
                    ['location', 'like', '%'.$query.'%'],
                    ['validated', 1],
                    ]);})->get();
    if (count($personnels) < 1){
        return back()->with('error','Registered Health Personnel Not Available in your Location');      
    }
        return view('QuickMed.show',compact('personnels','query'));
    }

/*
    public function map(Request $request)
    {   
        $query = $request->location;
        if(!$query){
             return back()->with('error','Enter Location to Search');
        }
    $personnels = DB::table('personnels')->where(function ($search) use ($query){
               $search->where([ 
                    ['status','available'],
                    ['location', 'like', '%'.$query.'%'],
                    ['validated', 1],
                    ]);})->first();
    if (count($personnels) < 1){
        return back()->with('error','Registered Health Personnel Not Available in your Location');      
    }
        return view('QuickMed.mapShow',compact('personnels'));
    }
    
*/
    
}
    




