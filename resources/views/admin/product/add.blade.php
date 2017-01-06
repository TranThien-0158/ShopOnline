@extends('admin.master')
@section('title')
   Thêm Sản Phẩm
@endsection
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <section class="content-header">
            <h1>
               Product
               <small>Add new</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Product</a></li>
               <li class="active">Add</li>
            </ol>
         </section>
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box box-primary">
                     <form role="form" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                           <div class="form-group">
                              <label>Danh mục</label>
                              <select class="form-control" name="sltParent">
                                 @foreach($cate as $item)
                                 <option value="{{ $item->id }}">{{ $item->name }}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Tên sản phẩm</label>
                              <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="txtName">
                           </div>
                           <div class="form-group">
                              <label>Giới thiệu sản phẩm</label>
                              <input name="txtIntro" class="form-control" placeholder="Lời giới thiệu">
                           </div>
                           <div class="form-group">
                              <label>Giá</label>
                              <input type="text" class="form-control" placeholder="Nhập giá sản phẩm" name="txtPrice">
                           </div>
                           <div class="form-group">
                              <label>Từ Khóa</label>
                              <input type="text" class="form-control" placeholder="Nhập từ khóa" name="txtKeyword">
                           </div>
                           <div class="form-group">
                              <label>Mô tả</label>
                              <textarea name="txtDescription" class="form-control ckeditor" rows="5"></textarea>
                           </div>
                           <div class="form-group">
                              <label>Hình ảnh</label>
                              <input type="file" name="fImage" class="form-control">
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