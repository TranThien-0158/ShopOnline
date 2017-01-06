<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'txtName'       => 'required',
            'txtEmail'      => 'required|unique:users,email|email',
            'txtPassword'   => 'required|min:6',
            'fAvatar'       => 'image'
        ];
        $messages = [
            'txtName.required'      =>  'Bạn chưa nhập Username',
            'txtEmail.required'     =>  'Bạn chưa nhập Email',
            'txtEmail.unique'       =>  'Email bạn vừa nhập đã tồn tại',
            'txtEmail.email'        =>  'Định dạng của Email không đúng',  
            'txtPassword.required'  =>  'Bạn chưa nhập Password',
            'txtPassword.min'       =>  'Tối thiểu là 6 kí tự',
            'fAvatar.image'         =>  'File bạn vừa chọn không phải là file ảnh'
        ];
        $this->validate($request,$rules,$messages);
        $user = new User();
        $user ->name = $request->txtName;
        $user ->email= $request->txtEmail;
        $user ->password = Hash::make($request->txtPassword);
        $user ->level = $request->rdoLevel;
        $user ->remember_token=$request->_token;
        if($request->hasFile('fAvatar'))
        {
            $file = $request->file('fAvatar');
            $name_image = $file ->getClientOriginalName();
            $Hinh = str_random(4)."_".$name_image;
            while (file_exists("src/upload/avatar/".$Hinh)) {
                $Hinh = str_random(4)."_".$name_image;
            }
            $file->move("resources/upload/avatar",$Hinh);
            $user->avatar = $Hinh;
        }
        $user->save();

        return redirect()->route('admin.user.index')->with('status','Thêm thành công !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $rules = [
            'txtName'       => 'required',
            'txtPassword'   => 'required|min:6',
            'fAvatar'       => 'image'
        ];
        $messages = [
            'txtName.required'      =>  'Bạn chưa nhập Username',
            'txtPassword.required'  =>  'Bạn chưa nhập Password',
            'txtPassword.min'       =>  'Tối thiểu là 6 kí tự',
            'fAvatar.image'         =>  'File bạn vừa chọn không phải là file ảnh'
        ];
        $this->validate($request,$rules,$messages);
        $user ->name = $request->txtName;
        // $user ->email= $request->txtEmail;
        $user ->password = Hash::make($request->txtPassword);
        $user ->level = $request->rdoLevel;
        $user ->remember_token=$request->_token;
        if($request->hasFile('fAvatar'))
        {
            $file = $request->file('fAvatar');
            $name_image = $file ->getClientOriginalName();
            $Hinh = str_random(4)."_".$name_image;
            while (file_exists("resources/upload/avatar/".$Hinh)) {
                $Hinh = str_random(4)."_".$name_image;
            }
            $file->move("resources/upload/avatar",$Hinh);
            unlink("resources/upload/avatar/".$user->avatar);
            $user->avatar = $Hinh;
        }
        $user->save();

        return redirect()->route('admin.user.index')->with('status','Cập nhật thành công !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.index')->with('status','Đã xóa thành công');
    }
    public function getLogin()
    {
        return view('admin.auth.login');
    }
    public function postLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->route('login')->with('messages','Username hoặc Password không đúng');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
