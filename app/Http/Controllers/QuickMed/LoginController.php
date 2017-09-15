<?php

namespace App\Http\Controllers\QuickMed;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{


   public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/index');
    }


}
