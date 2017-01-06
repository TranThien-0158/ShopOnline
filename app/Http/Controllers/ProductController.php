<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        return view('admin.product.add',compact('cate'));
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
            'txtName' => 'required|unique:products,name|max:100'
        ];
        $messages = [
            'txtName.required'   =>  'Bạn chưa nhập tên sản phẩm',
            'txtName.unique'     =>  'Tên sản phẩm vừa nhập đã tồn tại',   
            'txtName.max'        =>  'Độ dài không vượt quá 100 kí tự'
        ];
        $this->validate($request, $rules, $messages);
        $product = new Product();
        $product->name  = $request->txtName;
        $product->alias = changeTitle($request->txtName);
        $product->intro = $request->txtIntro;
        $product->price = $request->txtPrice;
        $product->keyword = $request->txtKeyword;
        $product->description = $request->txtDescription;
        $product->cate_id = $request->sltParent;
        $product->user_id = Auth::user()->id;


        $file = $request->file('fImage');
        $name_image = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name_image;
        while (file_exists("resources/upload/image/".$Hinh)) {
            $Hinh = str_random(4)."_".$name_image;
        }
        $file->move("resources/upload/image",$Hinh);
        $product->image = $Hinh;
        $product->save();
        return redirect()->route('admin.product.index')->with('status','Thêm sản phẩm thành công !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $cates = Category::all();
        return view('admin.product.edit',compact('product','cates'));
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
        $rules = [
            'txtName' => 'required|max:100'
        ];
        $messages = [
            'txtName.required'   =>  'Bạn chưa nhập tên sản phẩm',   
            'txtName.max'        =>  'Độ dài không vượt quá 100 kí tự'
        ];
        $this->validate($request, $rules, $messages);
        $product = Product::find($id);
        $product->name  = $request->txtName;
        $product->alias = changeTitle($request->txtName);
        $product->intro = $request->txtIntro;
        $product->price = $request->txtPrice;
        $product->keyword = $request->txtKeyword;
        $product->description = $request->txtDescription;
        $product->cate_id = $request->sltParent;
        $product->user_id = Auth::user()->id;
        
        //Lưu hình chính
        if($request->hasFile('fImage'))
        {
            $file = $request->file('fImage');
            $name_image = $file ->getClientOriginalName();
            $Hinh = str_random(4)."_".$name_image;
            while (file_exists("resources/upload/image/".$Hinh)) {
                $Hinh = str_random(4)."_".$name_image;
            }
            $file->move("resources/upload/image",$Hinh);
            unlink("resources/upload/image/".$product->image);
            $product->image = $Hinh;
        }
        $product->save();
        return redirect()->route('admin.product.index')->with('status','Cập nhật thông tin thành công !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Xóa sản phẩm
        $product = Product::find($id);
        unlink("resources/upload/picture/".$product->image);
        $product->delete($id);

        return redirect()->route('admin.product.index')->with('status','Đã xóa thành công !!!');
    }
}
