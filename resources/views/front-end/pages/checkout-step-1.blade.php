@extends('front-end.master')
@section('title')
   Thanh toán
@endsection
@section('content')
<!-- LIGHT SECTION -->
<section class="lightSection clearfix pageHeader">
   <div class="container">
      <div class="row">
         <div class="col-xs-6">
            <div class="page-title">
               <h2>Thông tin khách hàng</h2>
            </div>
         </div>
         <div class="col-xs-6">
            <ol class="breadcrumb pull-right">
               <li>
                  <a href="index.html">Home</a>
               </li>
               <li class="active">Thông tin khách hàng</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix stepsWrapper">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="innerWrapper clearfix stepsPage">
               <div class="row progress-wizard" style="border-bottom:0;">
                  <div class="col-xs-3 progress-wizard-step complete">
                     <div class="text-center progress-wizard-stepnum">Thông tin khách hàng</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep1') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step disabled">
                     <div class="text-center progress-wizard-stepnum">Phương thức giao hàng</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep2') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step disabled">
                     <div class="text-center progress-wizard-stepnum">Phương thức thanh toán</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep3') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step disabled">
                     <div class="text-center progress-wizard-stepnum">Xác nhận</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep4') }}" class="progress-wizard-dot"></a>
                  </div>
               </div>
               <form action="{{ route('post.CheckoutStep1') }}" class="row" method="POST" role="form">
                  {{ csrf_field() }}
                  <div class="col-xs-12">
                     <div class="page-header">
                        <h4>Thông tin khách hàng</h4>
                     </div>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                     <label for="">Tên Khách Hàng</label>
                     <input type="text" class="form-control" name="name">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                     <label for="">Email</label>
                     <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                     <label for="">Địa chỉ</label>
                     <input type="text" class="form-control" name="address">
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                     <label for="">Số điện thoại</label>
                     <input type="text" class="form-control" name="phone">
                  </div>
                  <div class="form-group col-sm-12 col-xs-12">
                     <label>Thông tin Khác (nếu có)</label>
                     <textarea name="information" class="form-control"></textarea>
                  </div>
                  <div class="col-xs-12">
                     <div class="well well-lg clearfix">
                        <ul class="pager">
                           <li class="next">
                              <input type="submit" class="btn btn-info" value="Tiếp tục">
                           </li>
                        </ul>
                     </div>
                  </div>
                  
               </form>
               @include('admin.blocks.errors')
            </div>
         </div>
      </div>
   </div>
</section>
@endsection