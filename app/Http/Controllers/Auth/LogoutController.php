<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /*
     * Author : Anoop
     * Function to logout the user
     * @all users
     * @return null
     */ 
    public function index()
    {
        #loging out the current user
        Auth::logout();

        return redirect()->route('home');
    }
}
