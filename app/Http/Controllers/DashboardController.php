<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Category;
use App\Product;

class DashboardController extends Controller
{
    public function getDashboard()
    {
    	$count_category = Category::all();
    	$count_product = Product::all();
    	$count_user = User::all();
    	return view('admin.dashboard.dashboard',compact('count_user','count_product','count_category'));
    }
}
