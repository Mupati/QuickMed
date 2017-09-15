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

    public function showPersonnel(Request $request)
    {  
        $query = $request->location;
        if(!$query){
             return back()->with('error','Enter Location to Search');
        }
    $personnels = DB::table('personnels')->where(function ($search) use ($query){
               $search->where('location', 'like', '%'.$query.'%');
                })->get();
    if (count($personnels) < 1){
        return redirect('/index')->with('error','Health Personnel Not Available in your Location');      
    }
        return view('QuickMed.show',compact('personnels','query'));
    }
    

    public function status()
    {   
        return back()->with('success','Status updated');
    }
    


}
