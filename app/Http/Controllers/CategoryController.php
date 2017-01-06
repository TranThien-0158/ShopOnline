<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates = Category::all();
        return view('admin.category.list',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
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
            'txtName' => 'required|unique:categories,name|max:100'
        ];
        $messages = [
            'txtName.required'   =>  'Bạn chưa nhập tên mặt hàng',
            'txtName.unique'     =>  'Tên danh mục vừa nhập đã tồn tại',   
            'txtName.max'        =>  'Độ dài không vượt quá 100 kí tự'
        ];
        $this->validate($request,$rules,$messages);
        $cate = new Category();
        $cate ->name = $request ->txtName;
        $cate ->alias = changeTitle($request->txtName);
        $cate ->keyword = $request ->txtKeyword;
        $cate ->description= $request ->txtDescription;
        $cate ->save();

        return redirect()->route('admin.category.index')->with('status','Thêm mặt hàng thành công !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::find($id);
        return view('admin.category.edit',compact('cate'));
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
            'txtName.required'   =>  'Bạn chưa nhập tên mặt hàng', 
            'txtName.max'        =>  'Độ dài không vượt quá 100 kí tự'
        ];
        $this->validate($request,$rules,$messages);
        $cate = Category::find($id);
        $cate ->name = $request ->txtName;
        $cate ->alias = changeTitle($request->txtName);
        $cate ->keyword = $request ->txtKeyword;
        $cate ->description= $request ->txtDescription;
        $cate ->save();

        return redirect()->route('admin.category.index')->with('status','Cập nhật thông tin thành công !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate_product = Product::where('cate_id',$cate->id)->count();
        if($cate_product == 0)
        {
            $cate->delete();
            return redirect()->route('admin.category.index')->with('status','Xóa thông tin thành công !!!');
        }
        else
            return redirect()->route('admin.category.index')->with('status', 'Lỗi ràng buộc giữa PRODUCT và CATEGORY');
    }
}
