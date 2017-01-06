<div class="bannercontainer">
   <div class="fullscreenbanner-container">
      <div class="fullscreenbanner">
         <ul>
            @foreach($slider as $slide)
            @foreach($product_slide as $item)
            <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
               <img src="{{ url('resources/upload/slide/'.$slide->slide) }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
               <div class="slider-caption container">
                  <div class="tp-caption rs-caption-1 sft start"
                     data-hoffset="0"
                     data-x="370"
                     data-y="54"
                     data-speed="800"
                     data-start="1500"
                     data-easing="Back.easeInOut"
                     data-endspeed="300">
                     <img src="{{ url('resources/upload/image/'.$item->image) }}" alt="slider-image">
                  </div>
                  <div class="tp-caption rs-caption-2 sft"
                     data-hoffset="0"
                     data-y="119"
                     data-speed="800"
                     data-start="2000"
                     data-easing="Back.easeInOut"
                     data-endspeed="300">
                     {{ $item->category->name }}
                  </div>
                  <div class="tp-caption rs-caption-3 sft"
                     data-hoffset="0"
                     data-y="185"
                     data-speed="1000"
                     data-start="3000"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off">
                     {{ number_format($item->price,0,",",".") }}VNĐ<br>
                     <small>{{ $item->name }}</small>
                  </div>
                  <div class="tp-caption rs-caption-4 sft"
                     data-hoffset="0"
                     data-y="320"
                     data-speed="800"
                     data-start="3500"
                     data-easing="Power4.easeOut"
                     data-endspeed="300"
                     data-endeasing="Power1.easeIn"
                     data-captionhidden="off">
                     <span class="page-scroll"><a href="{{ route('addToCart',[$item->id,$item->alias]) }}" class="btn primary-btn">Buy Now<i class="glyphicon glyphicon-chevron-right"></i></a></span>
                  </div>
               </div>
            </li>
            @endforeach
            @endforeach
         </ul>
      </div>
   </div>
</div>