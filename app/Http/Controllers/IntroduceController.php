<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Introduce;

class IntroduceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introduces = Introduce::all();
        return view('admin.introduce.list',compact('introduces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.introduce.add');
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
            'txtTitle'       => 'required',
            'txtContent'       => 'required'
        ];
        $messages = [
            'txtTitle.required'      =>  'Bạn chưa nhập tiêu đề cho bài viết',
            'txtContent.required'     =>  'Bạn chưa thêm nội dung cho bài viết',
        ];
        $this->validate($request,$rules,$messages);
        $introduce = new Introduce();
        $introduce ->title = $request->txtTitle;
        $introduce ->content = $request->txtContent;
        $introduce->save();
        return redirect()->route('admin.introduce.index')->with('status','Thêm bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $introduce = Introduce::find($id);
        return view('admin.introduce.detail',compact('introduce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $introduce = Introduce::find($id);
        return view('admin.introduce.edit',compact('introduce'));
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
            'txtTitle'       => 'required',
            'txtContent'       => 'required'
        ];
        $messages = [
            'txtTitle.required'      =>  'Bạn chưa nhập tiêu đề cho bài viết',
            'txtContent.required'     =>  'Bạn chưa thêm nội dung cho bài viết',
        ];
        $this->validate($request,$rules,$messages);
        $introduce = Introduce::find($id);
        $introduce ->title = $request->txtTitle;
        $introduce ->content = $request->txtContent;
        $introduce->save();
        return redirect()->route('admin.introduce.index')->with('status','Cập nhật bài viết thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $introduce = Introduce::find($id);
        $introduce->delete();
        return redirect()->route('admin.introduce.index')->with('status','Xóa bài viết thành công');
    }
}
