@extends('admin.master')
@section('title')
   Sửa Sản Phẩm
@endsection
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <section class="content-header">
            <h1>
               Product
               <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Product</a></li>
               <li class="active">Edit</li>
            </ol>
         </section>
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box box-primary">
                     <form role="form" action="{{ route('admin.product.update',[$product->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                           <div class="form-group">
                              <label>Danh mục</label>
                              
                              <select class="form-control" name="sltParent">
                                 @foreach($cates as $cate)
                                 <option 

                                 @if($product->cate_id == $cate->id)
                                    selected
                                 @endif 
                                 value="{{ $cate->id }}">{{ $cate->name }}</option>
                                 @endforeach
                              </select>
                             
                           </div>
                           <div class="form-group">
                              <label>Tên sản phẩm</label>
                              <input type="text" class="form-control" name="txtName" value="{{ $product->name }}">
                           </div>
                           <div class="form-group">
                              <label>Giới thiệu sản phẩm</label>
                              <input name="txtIntro" class="form-control" value="{{ $product->intro }}">
                           </div>
                           <div class="form-group">
                              <label>Giá</label>
                              <input type="text" class="form-control" name="txtPrice" value="{{ $product->price }}">
                           </div>
                           <div class="form-group">
                              <label>Từ Khóa</label>
                              <input type="text" class="form-control" name="txtKeyword" value="{{ $product->keyword }}">
                           </div>
                           <div class="form-group">
                              <label>Mô tả</label>
                              <textarea name="txtDescription" class="form-control ckeditor" rows="5">
                                 {{ $product->description }}
                              </textarea>
                           </div>
                           <div class="form-group">
                              <label>Hình ảnh</label>
                              <br>
                              <img src="{{ url('resources/upload/image/'.$product->image) }}" alt="" width="100px">
                              <hr>
                              <input type="file" name="fImage" class="form-control">
                           </div>
                           @include('admin.blocks.errors')
                        </div>
                        <div class="box-footer">
                           <button type="submit" class="btn btn-primary">Lưu lại</button>
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