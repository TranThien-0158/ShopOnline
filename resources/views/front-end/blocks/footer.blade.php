<div class="footer clearfix">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 col-xs-12">
            <div class="footerLink">
               <h3>Loại sản phẩm</h3>
               <ul class="list-unstyled">
                  @foreach($cates as $cate)
                  <li><a href="{{ route('category-grid',[$cate->id,$cate->alias]) }}">{{ $cate->name }} </a></li>
                  @endforeach
               </ul>
            </div>
         </div>
         <div class="col-sm-4 col-xs-12">
            <div class="footerLink">
               <h3>Thông tin liên lạc</h3>
               <ul class="list-unstyled">
                  <li>Số điện thoại: (+84) 165 8890 216</li>
                  <li>Group-6@hcmute.edu.com.vn</li>
                  <li>Số 1 Võ Văn Ngân, Phường Linh Chiểu, Linh Chiểu, Thủ Đức, Hồ Chí Minh</li>
               </ul>
            </div>
         </div>
         <div class="col-sm-4 col-xs-12">
            <div class="newsletter clearfix">
               <h3>Liên hệ</h3>
               <p>Nhận thông tin mới nhất về sản phẩm của chúng tôi</p>
               <div class="input-group">
                  <input type="text" class="form-control" placeholder="Nhập Email của bạn" aria-describedby="basic-addon2">
                  <a href="#" class="input-group-addon" id="basic-addon2">go <i class="glyphicon glyphicon-chevron-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- COPY RIGHT -->
<div class="copyRight clearfix">
   <div class="container">
      <div class="row">
         <div class="col-sm-7 col-xs-12">
            <p class="text-center"><a target="_blank" href="{{ url('/') }}">Laravel Shop 2016</a>.</p>
         </div>
         <div class="col-sm-5 col-xs-12">
            <ul class="list-inline">
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
               <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</div>