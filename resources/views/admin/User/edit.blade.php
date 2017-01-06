@extends('admin.master')
@section('title')
  Chỉnh sửa thông tin
@endsection 
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
         <section class="content-header">
            <h1>
               User
               <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
               <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
               <li><a href="#">User</a></li>
               <li class="active">Edit</li>
            </ol>
         </section>
         <section class="content">
            <!-- general form elements -->
            <div class="box box-primary">
               <!-- form start -->
               <form role="form" action="{{ route('admin.user.update',[$user->id]) }}" method="POST" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="box-body">
                     <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" class="form-control" placeholder="Nhập họ tên người dùng" name="txtName" value="{{ $user->name }}">
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control"  placeholder="Nhập Email" name="txtEmail" value="{{ $user->email }}">
                     </div>
                     <div class="checkbox">
                        <label>
                          <input type="checkbox"> Đổi mật khẩu
                        </label>
                    </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Nhập Password" name="txtPassword" value="">
                     </div>
                     <div class="form-group">
                        <label>Level</label>
                        <br>
                        <label class="radio-inline">
                          <input name="rdoLevel" value="0"
                          @if($user->level == 0)
                            checked
                          @endif
                           type="radio">Member
                        </label>
                        <label class="radio-inline">
                          <input name="rdoLevel" value="1" 
                          @if($user->level == 1)
                            checked
                          @endif
                          type="radio">Admin
                        </label>
                     </div>
                     <div class="form-group">
                        <label>Avatar</label>
                        <br>
                        <img src="{{ url('resources/upload/avatar/'.$user->avatar )}}" alt="" width="100px">
                        <hr>
                        <input type="file" name="fAvatar">
                     </div>
                     @include('admin.blocks.errors')
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Add new</button>
                     <button type="reset" class="btn btn-default">Reset</button>
                  </div>
               </form>
            </div>
      </div>
   </div>
   <!-- /.row -->
   </section>
</div>
@endsection