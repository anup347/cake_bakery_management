<?php

namespace App\Http\Controllers\Cake;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cake;
use Illuminate\Support\Facades\Storage;

class CakeController extends Controller
{

    /*
     * Author : Anoop
     * Function to load all cakes 
     * @all users
     * @return null
     */ 
    public function index()
    {   
        #fetch all cakes
        $cakes = Cake::all();

        return view('cakes.index', compact('cakes'));
    }

    /*
     * Author : Anoop
     * Function to load add cake page
     * @all users
     * @return null
     */ 
    public function addCake()
    {
        return view('cakes.addcake');
    }


    /*
     * Author : Anoop
     * Function to store cake information
     * @all users
     * @return null
     */ 
    public function store(Request $request)
    {
        #validate cake information
        $this->validate($request, [
            'cake_name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png,bmp,tiff |max:4096'
        ]);

        #new name for cake file
        $newImageName = time() . '-' . $request->cake_name . '.' . $request->image->extension();
        #store cake to storage
        $request->image->move(public_path('CakeImages'), $newImageName);

        #store cake information to database
        $cake = Cake::create([
            'name'  =>  $request->cake_name,
            'description'   =>  $request->description,
            'price'        =>  $request->price,
            'image_path'    => $newImageName,
        ]);

        #if error in storage dispaly error
        if (!$cake) {
            return back()->with('cakeAddMsg', "Error Saving data");
        }

        return redirect()->route('cakes.index')->with('cakeAddMsg', 'Cake created!');
    }

    /*
     * Author : Anoop
     * Function to diaplay individual cake data
     * @all users
     * @return null
     */ 
    public function show(Cake $cake)
    {
        return view('cakes.show', [
            'cake' => $cake
        ]);
    }
}
