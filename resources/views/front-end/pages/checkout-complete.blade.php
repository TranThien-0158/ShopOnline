@extends('front-end.master')
@section('title')
   Xác nhận thanh toán
@endsection
<!-- LIGHT SECTION -->
@section('content')
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>thanks message</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="active">thanks message</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- MAIN CONTENT SECTION -->
   <section class="mainContent clearfix setp5">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="thanksContent">
                  <h2>Thank You For Your Order <small>You will receive an email of your order details</small></h2>
                  <h3>Shipping Details</h3>
                  <div class="thanksInner">
                     <div class="row">
                        <div class="col-sm-6 col-xs-12 tableBlcok">
                           <address>
                              <span>Shipping address:</span> <a href="mailto:adamsmith@bigbag.com">adamsmith@bigbag.com</a> <br>
                              <span>Email:</span> <a href="mailto:adamsmith@bigbag.com">adamsmith@bigbag.com</a> <br>
                              <span>Phone:</span> +884 5452 6432
                           </address>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                           <div class="well">
                              <h2><small>Order ID</small>9547</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection