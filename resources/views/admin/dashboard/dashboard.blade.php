@extends('admin.master')
@section('title')
   Dashboard
@endsection 
@section('content')
<div class="content-wrapper">
   <section class="content">
      <div class="row">
         <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
               <div class="inner">
                  <h3>150</h3>
                  <p>Đơn hàng</p>
               </div>
               <div class="icon">
                  <i class="ion ion-bag"></i>
               </div>
               <a href="#" class="small-box-footer">Xem chi tiết<i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
               <div class="inner">
                  <h3>{{ $count_user->count() }}</h3>
                  <p>Người dùng</p>
               </div>
               <div class="icon">
                  <i class="ion ion-person-add"></i>
               </div>
               <a href="{{ route('admin.user.index') }}" class="small-box-footer">Xem chi tiết<i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
               <div class="inner">
                  <h3>{{ $count_category->count() }}</h3>
                  <p>Loại sản phẩm</p>
               </div>
               <div class="icon">
                  <i class="ion ion-cube"></i>
               </div>
               <a href="{{ route('admin.category.index') }}" class="small-box-footer">Xem chi tiết<i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
               <div class="inner">
                  <h3>{{ $count_product->count() }}</h3>
                  <p>Sản phẩm</p>
               </div>
               <div class="icon">
                  <i class="ion ion-social-chrome"></i>
               </div>
               <a href="{{ route('admin.product.index') }}" class="small-box-footer">Xem chi tiết<i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <!-- ./col -->
      </div>
   </section>
</div>
@endsection