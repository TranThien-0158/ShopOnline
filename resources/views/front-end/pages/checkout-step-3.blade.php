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
               <h2>Phương thức thanh toán</h2>
            </div>
         </div>
         <div class="col-xs-6">
            <ol class="breadcrumb pull-right">
               <li>
                  <a href="index.html">Home</a>
               </li>
               <li class="active">Phương thức thanh toán</li>
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
                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                     <div class="text-center progress-wizard-stepnum">Địa chỉ giao hàng</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep1') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                     <div class="text-center progress-wizard-stepnum">Phương thức nhận hàng</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep2') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step active">
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
               <form action="#" class="row" method="POST" role="form">
                  <div class="col-xs-12">
                     <div class="page-header">
                        <h4>Thông tin thanh toán</h4>
                     </div>
                     <div class="col-md-6">
                     </div>
                     <div class="radio">
                        <input type="radio" name="rdo">Thanh toán bằng cách chuyển khoản

                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="well well-lg clearfix">
                        <ul class="pager">
                           <li class="next pull-left"><input type="button" class="btn btn-default" onClick="location.href='{{ route('CheckoutStep2') }}'" value="Trước đó" /></li>
                           <li class="next pull-right"><input type="submit" href="{{ route('CheckoutStep4') }}" value="Tiếp tục"></li>
                        </ul>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection