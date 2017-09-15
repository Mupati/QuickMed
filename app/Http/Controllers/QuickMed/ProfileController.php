<?php
namespace App\Http\Controllers\QuickMed;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function dashboard()
	{
		return view('QuickMed.dashboard.dashboard');
	}

    public function status()
    {   
        return back()->with('success','Status updated');
    }
    

  
}
