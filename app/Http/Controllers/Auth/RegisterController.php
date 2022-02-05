<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{   
    /*
     * Author : Anoop
     * Function to load registeration page
     * Guest user
     * @return null
     */ 
    public function index()
    {
        return view('auth.register');
    }

    /*
     * Author : Anoop
     * Function to store user information
     * @all users
     * @return null
     */ 
    public function store(Request $request)
    { 
        #validate registeration information
        $this->validate($request,[
            'name' =>  'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|'
        ]);

        #create user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true
        ]);
     
        return redirect()->route('login');
    }
}
