@extends('admin.master')
@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Product
         <small>List</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Product</a></li>
         <li class="active">List</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  Danh sách sản phẩm
               </div>
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Image</th>
                           <th>Price</th>
                           <th>Category</th>
                           <th class="text-center">Edit</th>
                           <th class="text-center">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($products as $product)
                           <tr>
                              <td>{{ $product->id }}</td>
                              <td>{{ $product->name }}</td>
                              <td width="5%">
                                 <img src="{{ url('resources/upload/image/'.$product->image) }}" alt="" class="img-responsive" id="fix-image-list">
                              </td>
                              <td>{{ number_format($product->price,0,",",".")}} VNĐ</td>
                              <td>{{ $product->category->name }}</td>
                              <td width="5%"><a href="{{ route('admin.product.edit',[$product->id]) }}" class="btn btn-link"><i class="fa fa-pencil fa-fw"></i>Edit</a></td>
                              <td width="5%">
                                 <form action="{{ route('admin.product.destroy',[$product->id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-link"><i class="fa fa-trash-o fa-fw"></i>Delete</button>
                                 </form>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
@endsection