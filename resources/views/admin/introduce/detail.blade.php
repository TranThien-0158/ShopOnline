@extends('admin.master')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h1>
          Introduce
          <small>Detail</small>
        </h1>
      </div>
    </div>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Introduce</a></li>
      <li class="active">Detail</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- column -->
      <div class="col-md-10 col-md-offset-1">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" action="" method="">
            <div class="box-header">
              <h1>{{ $introduce->title }}</h1>
            </div>
            <div class="box-body">
              {!! $introduce->content !!}
            </div>
          </form>

        </div>
      </div>
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection