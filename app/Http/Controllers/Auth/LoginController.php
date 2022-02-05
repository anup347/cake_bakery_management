<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    /*
     * Author : Anoop
     * Function to load the login index page
     * @guest user
     * @return null
     */ 
    public function index()
    {
       return view ('auth.login');
    }

    /*
     * Author : Anoop
     * Function to process login
     * @guest user
     * @return null
     */ 
    public function userLogin(Request $request)
    {

        #input validation 
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        #check login 
        if(!Auth::attempt(['email' => $request->email, 'password' => $request->password])){
           return back()->with('status', "Invalid Login");
        }

        return redirect()->route('cakes.index');
    }

}
