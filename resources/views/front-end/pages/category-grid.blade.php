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
                  <h2>Product Grid View</h2>
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
                        <button type="button" class="btn btn-default active" onclick="window.location.href='javascript:void()'"><i class="fa fa-th" aria-hidden="true"></i><span>Grid</span></button>
                        <button type="button" class="btn btn-default" onclick="window.location.href='{{ route('category-list',[$cate_name->id,$cate_name->alias]) }}'"><i class="fa fa-th-list" aria-hidden="true"></i><span>List</span></button>
                     </div>
                  </div>
               </div>
               <div class="row">
                  @foreach($cate_product as $item )
                  
                  <div class="col-sm-4 col-xs-12">
                     <div class="productBox">
                        <div class="productImage clearfix">
                           <img src="{{ url('resources/upload/image/'.$item->image) }}" alt="products-img" id="image-grid">
                           <div class="productMasking">
                              <ul class="list-inline btn-group text-center" role="group">
                                 <li><a href="{{ route('addToCart',[$item->id,$item->alias]) }}" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                 <li><a class="btn btn-default" data-toggle="modal" href="#{{$item->id}}" ><i class="fa fa-eye"></i></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="productCaption clearfix">
                           <a href="{{ route('product',[$item->id,$item->alias]) }}">
                              <h5>{{ $item->name }}</h5>
                           </a>
                           <h3>{{ number_format($item->price,0,",",".") }}VNĐ</h3>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
   @foreach($cate_product as $item)
   <div class="modal fade quick-view" id="{{ $item->id }}" tabindex="-1" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-body">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <div class="media">
                  <div class="media-left">
                     <img class="media-object" src="{{ url('resources/upload/image/'.$item->image) }}" alt="Image" id="image-quick-view">
                  </div>
                  <div class="media-body">
                     <h2>{{ $item->name }}</h2>
                     <h3>{{ number_format($item->price,0,",",".") }}</h3>
                     <p>Thông tin về sản phẩm</p>
                     <span class="quick-drop resizeWidth">
                        <select name="guiest_id4" id="guiest_id4" class="select-drop">
                           <option value="0">Qty</option>
                           <option value="1">Qty 1</option>
                           <option value="2">Qty 2</option>
                           <option value="3">Qty 3</option>
                        </select>
                     </span>
                     <div class="btn-area">
                        <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                     </div>
                  </div>
               </div>
               <p>{!! $item->description !!}</p>
            </div>
         </div>
      </div>
   </div>
   @endforeach
@endsection