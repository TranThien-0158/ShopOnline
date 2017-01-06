@extends('admin.master')
@section('title')
  Introduce
@endsection
@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Introduce
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
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                     <thead>

                        <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th class="text-center">Show</th>
                           <th class="text-center">Edit</th>
                           <th class="text-center">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($introduces as $introduce)
                        <tr>
                           <td>{{ $introduce->id }}</td>
                           <td style="color:red">
                              {{ $introduce->title }}
                           </td>
                           <td width="5%"><a href="{{ route('admin.introduce.show',[$introduce->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i>Show</a></td>
                           <td width="5%"><a href="{{ route('admin.introduce.edit',[$introduce->id]) }}" class="btn btn-link"><i class="fa fa-pencil fa-fw"></i>Edit</a></td>
                           <td width="5%">
                              <form action="{{ route('admin.introduce.destroy',[$introduce->id]) }}" method="POST">
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