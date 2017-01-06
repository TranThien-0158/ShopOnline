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
               <h2>Shipping method</h2>
            </div>
         </div>
         <div class="col-xs-6">
            <ol class="breadcrumb pull-right">
               <li>
                  <a href="index.html">Home</a>
               </li>
               <li class="active">Phương thức giao hàng</li>
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
                     <div class="text-center progress-wizard-stepnum">Thông tin khách hàng</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep1') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step active">
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
               <form action="#" class="row" method="POST" role="form">
                  <div class="col-xs-12">
                     <div class="page-header">
                        <h4>Chọn phương thức giao hàng</h4>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="orderBox">
                        <div class="table-responsive">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th colspan="2">Phương thức</th>
                                    <th>Thông tin</th>
                                    <th>Giá cả</th>
                                    <th></th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="col-xs-1"><i class="fa fa-plane" aria-hidden="true"></i></td>
                                    <td>Chuyển phát nhanh</td>
                                    <td>Thông qua dịch vụ chuyển phát nhanh</td>
                                    <td>50.000 đ</td>
                                    <td>
                                       <div class="checkboxArea">
                                          <input id="checkbox1" type="radio" name="checkbox" value="1" checked="checked">
                                          <label for="checkbox1"><span></span></label>
                                       </div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td class="col-xs-1"><i class="fa fa-ship" aria-hidden="true"></i></td>
                                    <td>Nhận tại cửa hàng</td>
                                    <td>Khách hàng sẽ nhận sản phẩm tại cửa hàng</td>
                                    <td>Free</td>
                                    <td>
                                       <div class="checkboxArea">
                                          <input id="checkbox2" type="radio" name="checkbox" value="1">
                                          <label for="checkbox2"><span></span></label>
                                       </div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="well well-lg clearfix">
                        <ul class="pager">
                           <li class="next pull-left">
                              <input type="button" style="color:#fff" onClick="location.href='{{ route('CheckoutStep1') }}'" value="Trước đó"/>
                           </li>
                           <li class="next pull-right"><input type="submit" value="Tiếp tục"></li>
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