@extends('front-end.master')
@section('title')
   Tài Khoản
@endsection

@section('content')
   <!-- LIGHT SECTION -->
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>ACCOUNT DASHBOARD</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="active">ACCOUNT DASHBOARD</li>
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
                  <a href="javascript:void(0)" class="btn btn-default active"><i class="fa fa-th" aria-hidden="true"></i>Dashboard</a>
                  <a href="{{ route('account-profile',[Auth::user()->id]) }}" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i>Trang cá nhân</a>
                  <a href="{{ route('account-address') }}" class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ</a>
                  <a href="{{ route('account-all-order') }}" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Đơn hàng</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12">
               <div class="innerWrapper">
                  <h3>Wellcome <span>{{ Auth::user()->name }}</span></h3>
                  <ul class="list-inline text-center">
                     <li><a href="{{ route('account-profile',[Auth::user()->id]) }}" class="btn btn-default btn-lg"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                     <li><a href="{{ route('account-address') }}" class="btn btn-default btn-lg"><i class="fa fa-map-marker" aria-hidden="true"></i>My Address</a></li>
                     <li><a href="{{ route('account-all-order') }}" class="btn btn-default btn-lg"><i class="fa fa-list" aria-hidden="true"></i>All Orders</a></li>
                  </ul>
                  <div class="orderBox">
                     <h4>Unpaid Orders</h4>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Order ID</th>
                                 <th>Date</th>
                                 <th>Items</th>
                                 <th>Total Price</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>#252125</td>
                                 <td>Mar 25, 2016</td>
                                 <td>2</td>
                                 <td>$ 99.00</td>
                                 <td><a href="#" class="btn btn-default">Pay now</a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="orderBox">
                     <h4>Pending Warranty Claims</h4>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Order ID</th>
                                 <th>Date</th>
                                 <th>Product Code</th>
                                 <th>Product Name</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>#252125</td>
                                 <td>Mar 25, 2016</td>
                                 <td>Z - 45263</td>
                                 <td>Lorem ipsum doler</td>
                                 <td><a href="#" class="btn btn-default">View</a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection