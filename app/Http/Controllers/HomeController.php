<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redriect( )
    {
        if(Auth::id())
        {
            if(Auth::user()->role=='1')
            {
                return view('backend.admin_home');
            }
            else
            {
                return view('frontend.user_home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
