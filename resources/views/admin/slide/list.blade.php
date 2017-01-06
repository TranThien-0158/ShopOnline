@extends('admin.master')
@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <h1>
         Slide
         <small>List</small>
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="#">Slide</a></li>
         <li class="active">List</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-header">
                  Danh sách Slide
               </div>
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-bordered table-striped table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Title</th>
                           <th>Slide</th>
                           <th class="text-center">Edit</th>
                           <th class="text-center">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($slides as $slide)
                        <tr>
                           <td>{{ $slide->id }}</td>
                           <td style="color:red">
                              {{ $slide->title }}
                           </td>
                           <td>
                              <img src="{{ url('resources/upload/slide/'.$slide->slide) }}" alt="" class="img-thumbnail" id="fix-slide">
                           </td>
                           <td width="5%"><a href="{{ route('admin.slide.edit',[$slide->id]) }}" class="btn btn-link"><i class="fa fa-pencil fa-fw"></i>Edit</a></td>
                           <td width="5%">
                              <form action="{{ route('admin.slide.destroy',[$slide->id]) }}" method="POST">
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