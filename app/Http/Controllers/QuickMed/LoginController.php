<?php

namespace App\Http\Controllers\QuickMed;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{


    use AuthenticatesUsers;

   
    protected function redirectTo()
    {
        return '/dashboard';
    }

    public function username()
    {
        return 'license';
    }

  /*
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

*/
}
