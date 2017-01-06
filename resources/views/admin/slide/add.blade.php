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
               <small>Add new</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Slide</a></li>
               <li class="active">Add</li>
            </ol>
         </section>
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box box-primary">
                     <form role="form" action="{{ route('admin.slide.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                           <div class="form-group">
                              <label>Tiêu đề</label>
                              <input type="text" class="form-control" placeholder="Nhập tiêu đề cho slide" name="txtTitle">
                           </div>
                           <div class="form-group">
                              <label>Slide</label>
                              <input type="file" class="form-control" name="fSlide">
                           </div>
                           @include('admin.blocks.errors')
                        </div>
                        <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Thêm mới</button>
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