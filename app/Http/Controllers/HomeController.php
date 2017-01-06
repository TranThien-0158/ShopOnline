<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;
use App\User;
use App\Introduce;
use App\Slider;
use App\Transaction;
use View;
use Hash;
use Auth;
use Cart;



class HomeController extends Controller
{
	public function __construct()
	{
		$cates = Category::all();
		$products = Product::orderby('id','DESC')->paginate(9);
        $product_slide=Product::take(3)->get();
        $slider = Slider::all();
        $content_cart = Cart::content();
        View::share('content_cart',$content_cart);
		View::share('cates', $cates);
		View::share('products',$products);
        View::share('product_slide',$product_slide);
        View::share('slider',$slider);
	}

    public function index()
    {
    	// Sản phẩm gần đây
    	$products_lastest = Product::orderBy('id','DESC')->take(6)->get();
    	return view('front-end.pages.index',compact('products_lastest'));
    }
    public function category_grid($id)
    {
        //Danh sách sản phẩm theo loại sản phẩm
        $cate_product = Product::where('cate_id',$id)->orderBy('id','DESC')->paginate(9);
        $cate_name = Category::find($id);
    	return view('front-end.pages.category-grid',compact('cate_product','cate_name'));
    }
    public function category_list($id)
    {
        //Danh sách sản phẩm theo loại sản phẩm
        $cate_product = Product::where('cate_id',$id)->orderBy('id','DESC')->paginate(9);
        $cate_name = Category::find($id);
        return view('front-end.pages.category-list',compact('cate_product','cate_name'));
    }
    public function product($id)
    {
        //Láy thông tin sản phẩm theo ID
        $product = Product::find($id);
        //Lấy sản phẩm theo loại sản phẩm
        $product_cate = Product::where('cate_id',$product->cate_id)->orderBy('id','DESC')->take(6)->get();
        return view('front-end.pages.single-product',compact('product','product_cate'));
    }
    public function about_us()
    {
        $intro = Introduce::select('title','content')->first();
        return view('front-end.pages.about-us',compact('intro'));
    }
    public function account_dashboard()
    {

        return view('front-end.pages.account-dashboard');
    }
    public function account_profile($id)
    {
        $user = User::find($id);
        return view('front-end.pages.account-profile',compact('user'));
    }
    public function postAccountProfile(Request $request, $id)
    {
        $user = User::find($id);
        $rules = [
            'txtName'       =>  'required',
            'txtPassword'   =>  'required',
            'txtNewPassword'=>  'required|min:6',
            'fAvatar'       =>  'image'
        ];
        $messages = [
            'txtName.required'      =>  'Bạn chưa nhập Username',  
            'txtPassword.required'  =>  'Bạn chưa nhập Password',
            'txtNewPassword.required'       =>  'Bạn chưa nhập Password mới',
            'txtNewPassword.min'            =>  'Độ dài password tối thiểu 6 kí tự',
            'fAvatar.image'         =>  'File bạn vừa chọn không phải là file ảnh'
        ];
        $this->validate($request,$rules,$messages);
        $user ->name = $request->txtName;
        $typePassword = $request->txtPassword;
        $currentPassword = Auth::user()->password;

        if(Hash::check($typePassword, $currentPassword))
        {
            
            $user ->password = Hash::make($request->txtNewPassword);
            if($request->hasFile('fAvatar'))
            {
                $file = $request->file('fAvatar');
                $name_image = $file ->getClientOriginalName();
                $Hinh = str_random(4)."_".$name_image;
                while (file_exists("resources/upload/avatar/".$Hinh)) {
                    $Hinh = str_random(4)."_".$name_image;
                }
                $file->move("resources/upload/avatar",$Hinh);
                $user->avatar = $Hinh;
            }
            $user->save();
            return redirect()->route('account-dashboard');
        }
        else
        {
            return redirect()->route('account-profile',$id)->with('messages','Password hiện tại bạn nhập chưa đúng');
        }
        
        

    }
    public function account_address()
    {
        return view('front-end.pages.account-address');
    }
    public function account_order()
    {
        return view('front-end.pages.account-all-order');
    }
    public function cart()
    {
        $content = Cart::content();
        $total = Cart::total(00,",",".");
        return view('front-end.pages.cart-page',compact('content','total'));
    }
    public function addToCart($id)
    {
        $product_buy = Product::where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_buy->name,'qty'=>1,'price'=>$product_buy->price,'options'=>array('img'=>$product_buy->image)));
        $content = Cart::content();

        return redirect()->route('cart');
    }
    public function removeToCart($id)
    {
        Cart::remove($id);
        return redirect()->route('cart');
    }
    public function updateToCart(Request $request)
    {
        if($request->ajax()){
            $id = $request->get('id');
            $qty = $request->get('qty');
            Cart::update($id,$qty);
            return "oke";
        }
    }
    //Thanh toán
    public function checkoutStep1()
    {
        return view('front-end.pages.checkout-step-1');
    }
    public function postCheckoutStep1(Request $request)
    {
        $rules = [
            'name'       => 'required',
            'email'      => 'required|email',
            'address'   => 'required',
            'phone'       => 'required'
        ];
        $messages = [
            'name.required'=>'Bạn chưa nhập tên',
            'email.required'=>'Bạn chưa nhập Email',
            'email.email'=>'Định dạng Email không đúng',
            'address.required'=>'Bạn chưa nhập địa chỉ giao hàng',
            'phone.required'=>'Bạn chưa nhập số điện thoại'
        ];
        $this->validate($request,$rules,$messages);
        $tran = new Transaction();
        $tran->user_name = $request->name;
        $tran->user_email = $request->email;
        $tran->user_phone = $request->phone;
        $tran->user_address = $request->address;

        //$tran->information = $request->information;
        $tran->status = 0;
        if(Auth::check())
        {
            $tran->user_id = Auth::user()->id;
        }
        $tran->save();
        return redirect()->route('CheckoutStep2');
    }
    public function checkoutStep2()
    {
        return view('front-end.pages.checkout-step-2');
    }
    public function checkoutStep3(){
        return view('front-end.pages.checkout-step-3');
    }
    public function checkoutStep4(){
        return view('front-end.pages.checkout-step-4');
    }
    public function checkoutComplete(){
        return view('front-end.pages.checkout-complete');
    }
}
