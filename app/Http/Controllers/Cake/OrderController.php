<?php

namespace App\Http\Controllers\Cake;

use App\Models\Cake;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /*
     * Author : Anoop
     * Function to open a cake order
     * @all users
     * @return null
     */ 
    public function index(Cake $cake)
    {
      
       return view('orders.index', [
            'cake' => $cake
        ]);
    }

    /*
     * Author : Anoop
     * Function to store cake order
     * @all users
     * @return null
     */ 
    public function cakeOrder(Request $request,Cake $cake)
    {   
        #create a user cake order
        $order = Order::create([
            'user_id' =>auth()->user()->id,
            'cake_id' =>$cake->id,
            'custom_changes' => $request->cstm_changes
        ]);

        return redirect()->route('orders.myorder');
    }

    /*
     * Author : Anoop
     * Function to display user orders
     * @all users
     * @return null
     */ 
    public function showUserOrder()
    {

        #fetch user orders
        $orders =Order::orderby('created_at','desc')->where('user_id', Auth::id())->paginate(6);
        
        return view('orders.myorder',[
           'orders' => $orders
        ]); 
    }

    /*
     * Author : Anoop
     * Function to show a particular order
     * @all users
     * @return null
     */ 
    public function fetchThisOrder(Order $order)
    {
        return view('orders.show',[
            'order' => $order
         ]);
    }
}

