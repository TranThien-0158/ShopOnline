<!DOCTYPE html>
<html>
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('title')</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="{{ url('admin_assets/bootstrap/css/bootstrap.min.css') }}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- DataTables -->
      <link rel="stylesheet" href="{{ url('admin_assets/plugins/datatables/dataTables.bootstrap.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ url('admin_assets/dist/css/AdminLTE.min.css') }}">
      <!-- AdminLTE Skins. -->
      <link rel="stylesheet" href="{{ url('admin_assets/dist/css/skins/_all-skins.min.css') }}">
      <link rel="stylesheet" href="{{ url('admin_assets/dist/css/fix-image.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('front-end/css/mycss.css') }}">
   </head>
   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         {{-- HEADER --}}
         @include('admin.page.header')
         {{-- SIDE BAR --}}
         @include('admin.page.sidebar')
         <!-- CONTENT -->
         @yield('content')
         <!-- FOOTER -->
         @include('admin.page.footer')
      </div>
      <!-- jQuery 2.2.3 -->
      <script src="{{ url('admin_assets/plugins/jQuery/jquery-2.2.3.min.js') }} "></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="{{ url('admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- DataTables -->
      <script src="{{ url('admin_assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ url('admin_assets/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
      <!-- AdminLTE App -->
      <script src="{{ url('admin_assets/dist/js/app.min.js') }}"></script>
      <script src="{{ url('admin_assets/dist/js/demo.js') }}"></script>
      {{-- Ckeditor --}}
      <script src="{{ url('admin_assets/dist/ckeditor/ckeditor.js') }}" ></script>
      <script src="{{ url('admin_assets/dist/js/myscript.js') }}"></script>
      @yield('script')
   </body>
</html>