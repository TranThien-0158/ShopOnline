<div class="col-md-3 col-sm-4 col-xs-12 sideBar">
   <div class="panel panel-default">
      <div class="panel-heading text-center">Loại sản phẩm</div>
      <div class="panel-body">
         <div class="collapse navbar-collapse navbar-ex1-collapse navbar-side-collapse">
            <ul class="nav navbar-nav side-nav">
               @foreach($cates as $cate)
               <li>
                  <a href="{{ route('category-grid',[$cate->id,$cate->alias]) }}">{{ $cate->name }}<i class="fa fa-hand-o-right"></i></a>
               </li>
               @endforeach
            </ul>
         </div>
      </div>
   </div>
</div>