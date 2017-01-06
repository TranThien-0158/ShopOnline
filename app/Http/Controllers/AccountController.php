<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;
use Hash;

class AccountController extends Controller
{
    public function postLogin(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;
    	if(Auth::attempt(['email' => $email, 'password' => $password]))
    	{
    		return redirect()->route('account-dashboard');
    	}
    	return redirect('/');
    }
    public function getLogout()
    {
    	Auth::logout();
    	return redirect('/');
    }
    public function postRegister(Request $request)
    {
    	$rules = [
            'txtName'       => 'required',
            'txtEmail'      => 'required|unique:users,email|email',
            'txtPassword'   => 'required|min:6'
        ];
        $messages = [
            'txtName.required'      =>  'Bạn chưa nhập Username',
            'txtEmail.required'     =>  'Bạn chưa nhập Email',
            'txtEmail.unique'       =>  'Email bạn vừa nhập đã tồn tại',
            'txtEmail.email'        =>  'Định dạng của Email không đúng',  
            'txtPassword.required'  =>  'Bạn chưa nhập Password',
            'txtPassword.min'       =>  'Tối thiểu là 6 kí tự'
        ];
        $this->validate($request,$rules,$messages);
        $user = new User();
        $user ->name = $request->txtName;
        $user ->email= $request->txtEmail;
        $user ->password = Hash::make($request->txtPassword);
        $user ->level = 0;
        $user ->remember_token=$request->_token;
        $user ->avatar ='male-member.png';
        $user->save();
        return redirect('/');
    }
}
