@extends('front-end.master')
@section('title')
   Giỏ hàng
@endsection
@section('content')
   <!-- LIGHT SECTION -->
   <section class="lightSection clearfix pageHeader">
      <div class="container">
         <div class="row">
            <div class="col-xs-6">
               <div class="page-title">
                  <h2>Cart</h2>
               </div>
            </div>
            <div class="col-xs-6">
               <ol class="breadcrumb pull-right">
                  <li>
                     <a href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="active">Cart</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <!-- MAIN CONTENT SECTION -->
   <section class="mainContent clearfix cartListWrapper">
      <div class="container">
         <div class="row">
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
                                    @foreach($content as $item)
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
                                 <li style="font-size: 15px">Tổng Cộng <span class="grandTotal">{{ $total }} đ</span></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="checkBtnArea">
                        <a href="{{ route('CheckoutStep1') }}" class="btn btn-primary btn-block">Thanh Toán<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
@section('script')
<script>
$(document).ready(function(){
   $(".updateCart").click(function(){
      var rowid = $(this).attr('id');
      var qty = $(this).parent().parent().find("#qty").val();
      var token = $("input[name='_token']").val();
      
      $.ajax({

         url:'update-to-cart/'+ rowid + '/'+ qty,
         type:'GET',
         data:{"_token":token,"id":rowid,"qty":qty},
         success:function(data){
            if(data == "oke"){
               window.location = "cart"
            }
         }
      });
   });
});
</script>
@endsection