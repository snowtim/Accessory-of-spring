<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'quantity', 'total_price', 'order_description', 'user_id'	
    ];

    protected function users() {
    	return $this->belongsTo(User::class);
    }
}
