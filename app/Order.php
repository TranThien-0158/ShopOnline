<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['quantity','price','amount'];

    public function product()
    {
    	return $this->belongsto('App\Product');
    }
    public function transaction()
    {
    	return $this->belongsto('App\Transaction');
    }
}
