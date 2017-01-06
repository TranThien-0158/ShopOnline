@extends('admin.master')
@section('title')
  Danh sách người dùng
@endsection
@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         User
         <small>List</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">User</a></li>
         <li class="active">List</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
                @include('admin.blocks.status')
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
                           <th>E-mail</th>
                           <th>Level</th>
                           <th class="text-center">Show</th>
                           <th class="text-center">Edit</th>
                           <th class="text-center">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($users as $user)
                        <tr>
                           <td id="col-id">{{ $user->id }}</td>
                           <td>{{ $user->name }}</td>
                           <td width="5%">
                             <img src="{{ url('resources/upload/avatar/'.$user->avatar) }}" class="img-responsive img-circle" alt="Image" id="fix-image-list">
                           </td>
                           <td>{{ $user->email }}</td>
                           <td width="5%">
                              @if($user->level==0)
                                {{ "Member" }}
                              @else
                                {{ "Admin" }}
                              @endif
                           </td>
                           <td width="5%"><a href="{{ route('admin.user.show',[$user->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i>Show</a></td>
                           <td width="5%"><a href="{{ route('admin.user.edit',[$user->id]) }}" class="btn btn-link"><i class="fa fa-pencil fa-fw"></i>Edit</a></td>
                           <td width="5%">
                              <form action="{{ route('admin.user.destroy',[$user->id]) }}" method="POST">
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