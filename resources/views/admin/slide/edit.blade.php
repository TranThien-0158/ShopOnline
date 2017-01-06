@extends('admin.master')
@section('title')
   Thêm Slide
@endsection
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <section class="content-header">
            <h1>
               Slide
               <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Slide</a></li>
               <li class="active">Edit</li>
            </ol>
         </section>
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box box-primary">
                     <form role="form" action="{{ route('admin.slide.update',[$slide->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                           <div class="form-group">
                              <label>Tiêu đề</label>
                              <input type="text" class="form-control" placeholder="Nhập tiêu đề cho slide" name="txtTitle" value="{{ $slide->title }}">
                           </div>
                           <div class="form-group">
                              <label>Slide</label>
                              <br>
                              <img src="{{ url('resources/upload/slide/'.$slide->slide) }}" alt="" width="300px">
                              <hr>
                              <input type="file" name="fSlide">
                           </div>
                           @include('admin.blocks.errors')
                        </div>
                        <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Lưu Lại</button>
                           <button type="reset" class="btn btn-default">Làm lại</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
@endsection