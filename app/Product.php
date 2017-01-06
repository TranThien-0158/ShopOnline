<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','alias','price','keyword','description','image','intro'];

    public function user()
    {
    	return $this->belongsto('App\User','user_id','id');
    }
    public function category()
    {
    	return $this->belongsto('App\Category','cate_id','id');
    }
    public function order()
    {
    	return $this->hasMany('App\Order');
    }
}
