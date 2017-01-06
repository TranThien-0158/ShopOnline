<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','alias','keyword','description'];

    public function product()
    {
    	return $this->hasMany('App\Product');
    }
}
