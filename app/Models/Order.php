<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'user_id',
        'fname', 
        'lname', 
        'email', 
        'address',
        'address2',
        'phone',
        'qty',
        'status',
        'country',
        'state',
        'postal',
        'amount',
        'subtotal',
        'order_code',
        'type',
    ];
}
