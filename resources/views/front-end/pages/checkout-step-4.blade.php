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
               <h2>review</h2>
            </div>
         </div>
         <div class="col-xs-6">
            <ol class="breadcrumb pull-right">
               <li>
                  <a href="index.html">Home</a>
               </li>
               <li class="active">review</li>
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
                     <div class="text-center progress-wizard-stepnum">Phương thức giao hàng</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep2') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step complete fullBar">
                     <div class="text-center progress-wizard-stepnum">Phương thức thanh toán</div>
                     <div class="progress">
                        <div class="progress-bar"></div>
                     </div>
                     <a href="{{ route('CheckoutStep3') }}" class="progress-wizard-dot"></a>
                  </div>
                  <div class="col-xs-3 progress-wizard-step complete">
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
                        <h4>order review</h4>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">Billing Address</h4>
                        </div>
                        <div class="panel-body">
                           <address>
                              <strong>Adam Smith</strong><br>
                              9/4 C Babor Road, Mohammad pur, <br>
                              Shyamoli, Dhaka <br>
                              Bangladesh
                           </address>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">Shipping Address</h4>
                        </div>
                        <div class="panel-body">
                           <address>
                              <strong>Adam Smith</strong><br>
                              9/4 C Babor Road, Mohammad pur, <br>
                              Shyamoli, Dhaka <br>
                              Bangladesh
                           </address>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">Payment Method</h4>
                        </div>
                        <div class="panel-body">
                           <address>
                              <span>Credit Card - VISA</span>
                           </address>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-xs-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">Shipping Method</h4>
                        </div>
                        <div class="panel-body">
                           <address>
                              <span>Post Air Mail</span>
                           </address>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h4 class="panel-title">Order Details</h4>
                        </div>
                        <div class="panel-body">
                           <div class="row">
                              <div class="col-sm-4 col-xs-12">
                                 <address>
                                    <a href="#">Email: adamsmith@bigbag.com</a> <br>
                                    <span>Phone: +884 5452 6432</span>
                                 </address>
                              </div>
                              <div class="col-sm-8 col-xs-12">
                                 <address>
                                    <span>Additional Information: </span><br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
                                 </address>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="cartListInner">
                  <form action="#">
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th></th>
                                 <th>Sản phẩm</th>
                                 <th>Giá</th>
                                 <th>Số lượng</th>
                                 <th>Tổng tiền</th>
                                 <th colspan="2"></th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                                 <form action="" method="">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    @foreach(Cart::content() as $item)
                                    <tr>
                                       <td class="col-xs-2">
                                          <span class="cartImage"><img width="100px" src="{{url('resources/upload/image/',$item->options['img']) }}" alt="image"></span>
                                       </td>
                                       <td class="col-xs-4"><a href="{{ route('product',[$item->id,changeTitle($item->name)]) }}" style="color:#6B68F6">{{ $item->name }}</a></td>
                                       <td class="col-xs-2">{{ number_format($item->price,0,",",".")}} đ</td>
                                       <td class="col-xs-1"><input type="text" id="qty" name="qty" placeholder="1" value="{{ $item->qty }}"></td>
                                       <td class="col-xs-2">{{ number_format($item->qty * $item->price,0,",",".") }} đ</td>
                                       <td>
                                          <a type="button" class="close" href="{{ route('removeToCart',['id'=>$item->rowId]) }}" ><i class="fa fa-trash-o"></i></a>
                                       </td>
                                       <td>
                                          <a type="button" class="close updateCart" href="#" id="{{ $item->rowId }}"><i class="fa fa-pencil-square"></i></a>
                                       </td>
                                    </tr>
                                    @endforeach
                                 </form>
                           </tbody>
                        </table>
                     </div>
                     <div class=" totalAmountArea">
                        <div class="row ">
                           <div class="col-sm-5 col-sm-offset-7 col-xs-12">
                              <ul class="list-unstyled">
                                 <li style="font-size: 15px">Tổng Cộng <span class="grandTotal">{{ Cart::total(00,",",".") }} đ</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     
                  </form>
               </div>
                  </div>
                  <div class="col-xs-12">
                     <div class="well well-lg clearfix">
                        <ul class="pager">
                           <li class="previous"><a href="{{ route('CheckoutStep3') }}">Trước đó
                           <li class="next"><a href="{{ route('checkoutComplete') }}">Xác nhận</a></li>
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