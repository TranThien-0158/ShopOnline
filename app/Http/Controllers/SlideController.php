<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slider;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slider::all();
        return view('admin.slide.list',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.add');
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
            'fSlide'       => 'required|image'
        ];
        $messages = [
            'txtTitle.required'      =>  'Bạn chưa nhập tiêu đề cho slide',
            'fSlide.required'     =>  'Bạn chưa chọn hình ảnh',
            'fSlide.image'         =>  'File bạn vừa chọn không phải là file ảnh'
        ];
        $this->validate($request,$rules,$messages);
        $slide = new Slider();
        $slide ->title = $request->txtTitle;
        $file = $request->file('fSlide');
        $name_image = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name_image;
        while (file_exists("resources/upload/slide/".$Hinh)) {
            $Hinh = str_random(4)."_".$name_image;
        }
        $file->move("resources/upload/slide",$Hinh);
        $slide->slide = $Hinh;
        $slide->save();

        return redirect()->route('admin.slide.index')->with('status','Thêm slide thành công!!');
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
        $slide = Slider::find($id);
        return view('admin.slide.edit',compact('slide'));
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
            'fSlide'       => 'image'
        ];
        $messages = [
            'txtTitle.required' =>  'Bạn chưa nhập tiêu đề cho slide',
            'fSlide.image'      =>  'File bạn vừa chọn không phải là file ảnh'
        ];
        $this->validate($request,$rules,$messages);
        $slide = Slider::find($id);
        $slide->title  = $request->txtTitle;
        
        //Lưu hình chính
        if($request->hasFile('fSlide'))
        {
            $file = $request->file('fSlide');
            $name_image = $file ->getClientOriginalName();
            $Hinh = str_random(4)."_".$name_image;
            while (file_exists("resources/upload/slide/".$Hinh)) {
                $Hinh = str_random(4)."_".$name_image;
            }
            $file->move("resources/upload/slide",$Hinh);
            unlink("resources/upload/slide/".$slide->slide);
            $slide->slide = $Hinh;
        }
        $slide->save();
        return redirect()->route('admin.slide.index')->with('status','Cập nhật thông tin thành công !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slider::find($id);
        unlink("resources/upload/slide/".$slide->slide);
        $slide->delete($id);

        return redirect()->route('admin.slide.index')->with('status','Đã xóa thành công !!!');
    }
}
