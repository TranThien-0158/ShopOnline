@extends('front-end.master')
@section('title')
   Trang Chủ
@endsection
@section('slide')
   @include('front-end.blocks.slide')
@endsection
@section('content')
   <section class="mainContent clearfix">
      <div class="container">
         <div class="row featuredCollection">
            <div class="col-xs-12">
               <div class="page-header">
                  <h4>Sản phẩm mới nhất</h4>
               </div>
            </div>
            @foreach($products as $product)
               <div class="col-sm-4 col-xs-12">
                  <div class="thumbnail" onclick="location.href='{{ route('product',[$product->id,$product->alias]) }}';">
                     <div class="imageWrapper">
                        <img src="{{ url('resources/upload/image/'.$product->image) }}" alt="feature-collection-image" id="image-product-home">
                        <div class="masking">
                           <a href="{{ route('product',[$product->id,$product->alias]) }}" class="btn viewBtn"><i class="fa fa-eye"></i></a>
                           
                        </div>
                     </div>
                     <div class="caption">
                        <h4>{{ $product->name }}</h4>
                     </div>
                  </div>
               </div>
            @endforeach
         </div>
         <div class="row featuredProducts">
            <div class="col-xs-12">
               <div class="page-header">
                  <h4>Sản phẩm gần đây</h4>
               </div>
            </div>
            <div class="col-xs-12">
               <div class="owl-carousel featuredProductsSlider">
                  @foreach($products_lastest as $product)
                     <div class="slide">
                        <div class="productImage">
                           <img src="{{ url('resources/upload/image/'.$product->image) }}" alt="featured-product-img" id="image-product">
                           <div class="productMasking">
                              <ul class="list-inline btn-group text-center" role="group">
                                 <li><a href="{{ route('addToCart',[$product->id,$product->alias]) }}" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                 <li><a data-toggle="modal" href="#{{ $product->id }}" class="btn btn-default"><i class="fa fa-eye"></i></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="productCaption">
                           <a href="{{ route('product',[$product->id,$product->alias]) }}">
                              <h5>{{ $product->name }}</h5>
                           </a>
                           <h3>{{ number_format($product->price,0,",",".") }}VNĐ</h3>
                        </div>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </section>
   @foreach($products_lastest as $item)
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
            </div>
         </div>
      </div>
   </div>
   @endforeach
@endsection