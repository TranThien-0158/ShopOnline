@extends('admin.master')
@section('title')
   Thêm danh mục
@endsection
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <section class="content-header">
            <h1>
               Category
               <small>Add new</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Category</a></li>
               <li class="active">Add</li>
            </ol>
         </section>
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box box-primary">
                     <form role="form" action="{{ route('admin.category.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="box-body">
                           <div class="form-group">
                              <label>Danh mục</label>
                              <input type="text" class="form-control" placeholder="Nhập tên danh mục" name="txtName">
                           </div>
                           <div class="form-group">
                              <label>Từ Khóa</label>
                              <input type="text" class="form-control" placeholder="Nhập từ khóa" name="txtKeyword">
                           </div>
                           <div class="form-group">
                              <label>Mô tả</label>
                              <textarea name="txtDescription" class="form-control ckeditor" rows="5"></textarea>
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