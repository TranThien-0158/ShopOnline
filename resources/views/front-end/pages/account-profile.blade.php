@extends('front-end.master')
@section('title')
   Trang cá nhân
@endsection
@section('content')
   <!-- LIGHT SECTION -->
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>PROFILE</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="active">PROFILE</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- MAIN CONTENT SECTION -->
   <section class="mainContent clearfix userProfile">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="btn-group" role="group" aria-label="...">
                  <a href="{{ route('account-dashboard') }}" class="btn btn-default"><i class="fa fa-th" aria-hidden="true"></i>Dashboard</a>
                  <a href="javascript:void(0)" class="btn btn-default active"><i class="fa fa-user" aria-hidden="true"></i>Trang cá nhân</a>
                  <a href="{{ route('account-address') }}" class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ</a>
                  <a href="{{ route('account-all-order') }}" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Đơn hàng</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12">
               <div class="innerWrapper profile">
                  <div class="orderBox">
                     <h4>Trang cá nhân</h4>
                  </div>
                  <div class="row">

                     <form class="form-horizontal" action="{{ route('account-profile',[$user->id]) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="col-md-3 col-sm-3 col-xs-12">account-profile
                           <div class="thumbnail">
                              <img src="{{url('resources/upload/avatar/'.Auth::user()->avatar) }}" alt="profile-image">
                              <br/>
                              
                           </div>
                           <input type="file" id="fileUpload" name="fAvatar" value="Thay đổi Avatar">
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                           @include('admin.blocks.errors')
                           @include('admin.blocks.messages')
                           <div class="form-group">
                              <label for="" class="col-md-2 col-sm-3 control-label">Tên đầy đủ</label>
                              <div class="col-md-10 col-sm-9">
                                 <input type="text" class="form-control" id="" placeholder="" value="{{ Auth::user()->name }}" name="txtName">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="" class="col-md-2 col-sm-3 control-label">E-mail</label>
                              <div class="col-md-10 col-sm-9">
                                 <input type="email" class="form-control" id="" disabled="" placeholder="" value="{{ Auth::user()->email }}" name="txtEmail">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="" class="col-md-2 col-sm-3 control-label">Password</label>
                              <div class="col-md-10 col-sm-9">
                                 <input type="password" class="form-control" id="" placeholder="" name="txtPassword">
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="" class="col-md-2 col-sm-3 control-label">New Password</label>
                              <div class="col-md-10 col-sm-9">
                                 <input type="password" class="form-control" id="" placeholder="" name="txtNewPassword">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-offset-10 col-md-2 col-sm-offset-9 col-sm-3">
                                 <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-floppy-o"></i>  Lưu</button>
                              </div>
                           </div>
                        </div>
                     
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection