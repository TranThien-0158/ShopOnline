@extends('admin.master')
@section('title')
   Introduce
@endsection
@section('content')
<div class="content-wrapper">
   <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
         <section class="content-header">
            <h1>
               Introduce
               <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">Introduce</a></li>
               <li class="active">Edit</li>
            </ol>
         </section>
         <section class="content">
            <div class="row">
               <div class="col-md-12">
                  <div class="box box-primary">
                     <form role="form" action="{{ route('admin.introduce.update',[$introduce->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="box-body">
                           <div class="form-group">
                              <label>Nội dung</label>
                              <input name="txtTitle" class="form-control" value="{{ $introduce->title }}">
                           </div>
                           <div class="form-group">
                              <label>Nội dung</label>
                              <textarea name="txtContent" class="form-control ckeditor" rows="20">{{  $introduce->content }}</textarea>
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