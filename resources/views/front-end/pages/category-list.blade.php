@extends('front-end.master')
@section('title')
   {{ $cate_name->name }}
@endsection

@section('content')
   <!-- LIGHT SECTION -->
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>Product List View</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="active">{{ $cate_name->name }}</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- MAIN CONTENT SECTION -->
   <section class="mainContent clearfix productsContent">
      <div class="container">
         <div class="row">
            {{-- Menu --}}
            @include('front-end.blocks.menu')
            <div class="col-md-9 col-sm-8 col-xs-12">
               <div class="row filterArea">
                  <div class="col-xs-6">
                     <select name="guiest_id1" id="guiest_id1" class="select-drop">
                        <option value="0">Default sorting</option>
                        <option value="1">Sort by popularity</option>
                        <option value="2">Sort by rating</option>
                        <option value="3">Sort by newness</option>
                        <option value="3">Sort by price</option>
                     </select>
                  </div>
                  <div class="col-xs-6">
                     <div class="btn-group pull-right" role="group">
                        <button type="button" class="btn btn-default" onclick="window.location.href='{{ route('category-grid',[$cate_name->id,$cate_name->alias]) }}'"><i class="fa fa-th" aria-hidden="true"></i><span>Grid</span></button>
                        <button type="button" class="btn btn-default active" onclick="window.location.href='javascript:void(0)'"><i class="fa fa-th-list" aria-hidden="true"></i><span>List</span></button>
                     </div>
                  </div>
               </div>
               <div class="row productListSingle">
                  @foreach($cate_product as $item)
                  <div class="col-xs-12">
                     <div class="media">
                        <div class="media-left">
                           <img class="media-object" src="{{ url('resources/upload/image/'.$item->image) }}" alt="Image">
                           <span class="maskingImage"><a data-toggle="modal" href="{{ route('product',[$item->id,$item->alias]) }}" class="btn viewBtn">Quick View</a></span>
                        </div>
                        <div class="media-body">
                           <h4 class="media-heading"><a href="{{ route('product',[$item->id,$item->alias]) }}">{{ $item->name }}</a></h4>
                           <p>{!! $item->intro !!}</p>
                           <h3>{{ number_format($item->price,0,",",".") }}VNĐ</h3>
                           <div class="btn-group" role="group">
                              <button type="button" class="btn btn-default" onclick="location.href='{{ route('addToCart',[$item->id,$item->alias]) }}';"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection