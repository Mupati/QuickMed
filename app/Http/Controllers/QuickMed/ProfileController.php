<?php
namespace App\Http\Controllers\QuickMed;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\QuickMed\Personnel;
use Response;

class ProfileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except('login');
    }

	public function dashboard()
	{
		return view('QuickMed.dashboard.dashboard');
	}

    public function status(Request $request)
    {  
        $personnel = Personnel::FindOrFail(Auth::id());
        $personnel->status = $request->update_status;
        $personnel->save();
        return response($personnel);

        // return response()->json($personnel, 200);
    }
    

  
}
