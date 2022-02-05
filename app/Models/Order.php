<?php

namespace App\Models;

use App\Models\Cake;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

         /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
       
	'user_id',
	'cake_id',
    'custom_changes',
    'update_price',
    'discount',
    'total'

    ];

    /*
     * Author : Anoop
     * Function cake info from order
     * @all users
     * @return null
     */ 
    public function cake()
    {
        return $this->belongsTo(Cake::class);
    }
}
