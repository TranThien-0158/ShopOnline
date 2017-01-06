<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['status','user_name','user_email','user_phone','user_address','amount', 'infomation'];
    public function user()
    {
    	return $this->belongsto('App\User');
    }
}
