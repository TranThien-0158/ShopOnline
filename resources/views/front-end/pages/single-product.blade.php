@extends('front-end.master')
@section('title')
   {{ $product->name }}
@endsection
@section('content')
   <!-- LIGHT SECTION -->
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>Single Product</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li>
                     <a href="{{ route('category-grid',[$product->category->id,$product->category->alias]) }}">{{ $product->category->name }}</a>
                  </li>
                  <li class="active">{{ $product->name }}</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- MAIN CONTENT SECTION -->
   <section class="mainContent clearfix">
   <div class="container">
      <div class="row singleProduct">
         <div class="col-xs-12">
            <div class="media">
               <div class="media-left productSlider">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="item active" data-thumb="0">
                           <img src="{{ url('resources/upload/image/'.$product->image) }}">
                        </div>
                        
                     </div>
                  </div>
                  {{-- <div class="clearfix">
                     <div id="thumbcarousel" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                           <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="img/products/signle-product/product-slide-small-01.jpg"></div>
                           <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="{{ url('front-end/img/products/signle-product/product-slide-small-02.jpg') }}"></div>
                           <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="{{ url('front-end/img/products/signle-product/product-slide-small-03.jpg') }}"></div>
                           <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="{{ url('front-end/img/products/signle-product/product-slide-small-04.jpg') }}"></div>
                        </div>
                        <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                     </div>
                  </div> --}}
               </div>
               <div class="media-body">
                  <ul class="list-inline">
                     <li><a href="index.html"><i class="fa fa-reply" aria-hidden="true"></i>Continue Shopping</a></li>
                     <li><a href="#"><i class="fa fa-plus" aria-hidden="true"></i>Share This</a></li>
                  </ul>
                  <h2>{{ $product->name }}</h2>
                  <h3>{{ number_format($product->price,0,",",".") }}VNĐ</h3>
                  <p>{{ $product->intro }}</p>
                  <span class="quick-drop resizeWidth">
                     <select name="guiest_id4" id="guiest_id4" class="select-drop">
                        <option value="0">Qty</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                     </select>
                  </span>
                  <div class="btn-area">
                     <a href="cart-page.html" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <div class="page-header"><h3>Thông tin sản phẩm</h3></div>
         <span>
            {!! $product->description !!}
         </span>
      </div>
      <div class="row productsContent">
         <div class="col-xs-12">
            <div class="page-header">
               <h4>Sản Phẩm Liên quan</h4>
            </div>
         </div>
         @foreach($product_cate as $item)
            <div class="col-md-3 col-sm-6 col-xs-12">
               <div class="productBox">
                  <div class="productImage clearfix">
                     <img src="{{ url('resources/upload/image/'.$item->image) }}" alt="products-img" id="image-product">
                     <div class="productMasking">
                        <ul class="list-inline btn-group text-center" role="group">
                           <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                           <li><a class="btn btn-default" data-toggle="modal" href="#{{$item->id}}" ><i class="fa fa-eye"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="productCaption clearfix">
                     <a href="{{ route('product',[$item->id,$item->alias]) }}"><h5>{{ $item->name }}</h5></a>
                     <h3>{{ number_format($item->price,0,",",".") }}</h3>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
   </div>
</section>
@foreach($product_cate as $item)
<div class="modal fade quick-view" id="{{ $item->id }}" tabindex="-1" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="media">
               <div class="media-left">
                  <img class="media-object" src="{{ url('resources/upload/image/'.$item->image) }}" alt="Image">
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
         </div>
      </div>
   </div>
</div>
@endforeach
@endsection