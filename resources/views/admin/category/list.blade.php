@extends('admin.master')

@section('title')
   Danh sách
@endsection

@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Category
         <small>List</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Category</a></li>
         <li class="active">List</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               @include('admin.blocks.status')
               <div class="box-header">
                  Danh sách các danh mục
               </div>
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Alias</th>
                           <th class="text-center">Edit</th>
                           <th class="text-center">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($cates as $cate)
                           <tr>
                              <td>{{ $cate->id }}</td>
                              <td>
                                 {{ $cate->name }}
                              </td>
                              <td>
                                 <span>{{ $cate->alias }}</span>
                              </td>
                              <td width="5%"><a href="{{ route('admin.category.edit',[$cate->id]) }}" class="btn btn-link"><i class="fa fa-pencil fa-fw"></i>Edit</a></td>
                              <td width="5%">
                                 <form action="{{ route('admin.category.destroy',[$cate->id]) }}" method="POST">
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