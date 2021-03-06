@extends('front-end.master')
@section('title')
   Địa chỉ
@endsection
@section('content')
   <!-- LIGHT SECTION -->
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>MY ADDRESS</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="active">My address</li>
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
                  <a href="{{ route('account-profile',[Auth::user()->id]) }}" class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i>Trang cá nhân</a>
                  <a href="javascript:void(0)" class="btn btn-default active"><i class="fa fa-map-marker" aria-hidden="true"></i>Địa chỉ</a>
                  <a href="{{ route('account-all-order') }}" class="btn btn-default"><i class="fa fa-list" aria-hidden="true"></i>Đơn hàng</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12">
               <div class="innerWrapper">
                  <div class="orderBox myAddress">
                     <h4>My Address</h4>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Company</th>
                                 <th>Name</th>
                                 <th>Address</th>
                                 <th>Country</th>
                                 <th class="col-md-2 col-sm-3">Phone</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Nokia</td>
                                 <td>Adam Smith</td>
                                 <td>9/4 C Babor Road, Mohammad Pur, Dhaka</td>
                                 <td>Bangladesh</td>
                                 <td>+884 5452 6452</td>
                                 <td>
                                    <div class="btn-group" role="group">
                                       <button type="button" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                       <button type="button" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Samsung</td>
                                 <td>Adam Smith</td>
                                 <td>9/4 C Babor Road, Mohammad Pur, Dhaka</td>
                                 <td>Bangladesh</td>
                                 <td>+884 5452 6452</td>
                                 <td>
                                    <div class="btn-group" role="group">
                                       <button type="button" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                       <button type="button" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Motorola</td>
                                 <td>Adam Smith</td>
                                 <td>9/4 C Babor Road, Mohammad Pur, Dhaka</td>
                                 <td>Bangladesh</td>
                                 <td>+884 5452 6452</td>
                                 <td>
                                    <div class="btn-group" role="group">
                                       <button type="button" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                       <button type="button" class="btn btn-default"><i class="fa fa-times" aria-hidden="true"></i></button>
                                    </div>
                                 </td>
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