@extends('front-end.master')
@section('title')
  Thông tin về chúng tôi
@endsection
@section('content')
  <!-- LIGHT SECTION -->
  <section class="lightSection clearfix pageHeader">
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <div class="page-title">
            <h2>Thông tin về cửa hàng</h2>
          </div>
        </div>
        <div class="col-xs-6">
          <ol class="breadcrumb pull-right">
            <li>
              <a href="{{ url('/') }}">Home</a>
            </li>
            <li class="active">About Us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix aboutUsInfo">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-header">
            <h3><strong style="color:blue">{{ $intro->title }}</strong></h3>
          </div>
        </div>
        <div class="col-sm-6 col-sm-push-6 col-xs-12">
          <img src="{{ url('front-end/img/title-laptop.jpg') }}" alt="about-us-img">
        </div>
        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
          <p class="lead">{!! $intro->content !!}</p>
          
        </div>
      </div>
    </div>
  </section>

@endsection