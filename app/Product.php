<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Product extends Model
{
    protected $fillable = [
    	'product_id', 'product_name', 'description', 'price', 'order_id'
    ];
}
