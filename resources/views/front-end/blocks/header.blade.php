<div class="header clearfix">
   <!-- TOPBAR -->
   <div class="topBar">
      <div class="container">
         <div class="row">
            <div class="col-md-6 hidden-sm hidden-xs">
               <ul class="list-inline">
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               </ul>
            </div>
            <div class="col-md-6 col-xs-12">
               <ul class="list-inline pull-right">
                  <li>
                     <span>
                        @if(!Auth::check())
                        <a data-toggle="modal" href='#login'><i class="fa fa-sign-in" aria-hidden="true"></i>  Đăng Nhập</a>
                        <small>or</small>
                        <a data-toggle="modal" href='#signup'><i class="fa fa-lock" aria-hidden="true"></i>  Đăng Ký Tài Khoản</a>
                        @endif
                     </span>
                  </li>
                  <li class="dropdown searchBox">
                     <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
                     <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                           <span class="input-group">
                           <input type="text" class="form-control" placeholder="Search…" aria-describedby="basic-addon2">
                           <span class="input-group-addon" id="basic-addon2">Search</span>
                           </span>
                        </li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="{{ route('cart') }}" class="dropdown-toggle" data-toggle="dropdown disabled"><i class="fa fa-shopping-cart"></i>{{ Cart::total(00,",",".") }}đ <span class="badge"> {{ Cart::count() }}</span></a>
                     <ul class="dropdown-menu dropdown-menu-right menu-cart">
                        <li>Giỏ hàng: <span class="badge">{{ Cart::count() }}</span>sản phẩm</li>
                        
                        <li>
                           <div class="btn-group" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" onclick="location.href='{{ route('cart') }}';">Giỏ Hàng</button>
                              <button type="button" class="btn btn-default" onclick="location.href='{{ route('CheckoutStep1') }}';">Thanh Toán</button>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- NAVBAR -->
   <nav class="navbar navbar-main navbar-default" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('front-end/img/logo.png') }}" alt=""></a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i>  Trang chủ</a></li>
               <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cubes" aria-hidden="true"></i>  Danh mục sản phẩm</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                     @foreach($cates as $cate)
                        <li><a href="{{ route('category-grid',[$cate->id, $cate->alias]) }}">{{ $cate->name }}</a></li>
                     @endforeach
                  </ul>
               </li>
               <li><a href="{{ route('about-us') }}"><i class="fa fa-info-circle" aria-hidden="true"></i>  Thông tin cửa hàng</a></li>
               <li><a href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i>  Liên hệ</a></li>
               @if(Auth::check())
               <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-secret" aria-hidden="true"></i>  {{ Auth::user()->name }}</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                        <li><a href="{{ route('account-dashboard') }}"><i class="fa fa-user" aria-hidden="true"></i>  Trang Cá Nhân</a></li>
                        <li><a href="{{ route('user-logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>   Đăng Xuất</a></li>
                  </ul>
               </li>
               @endif
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
   </nav>
</div>