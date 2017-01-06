<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <!-- SITE TITTLE -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <!-- PLUGINS CSS STYLE -->
      <link href="{{ url('front-end/plugins/jquery-ui/jquery-ui.css" rel="stylesheet')  }}">
      <link href="{{ url('front-end/plugins/bootstrap/css/bootstrap.min.css')  }}" rel="stylesheet">
      <link href="{{ url('front-end/plugins/font-awesome/css/font-awesome.min.css')  }}" rel="stylesheet">
      <link href="{{ url('front-end/plugins/selectbox/select_option1.css')  }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ url('front-end/plugins/rs-plugin/css/settings.css')  }}" media="screen">
      <link rel="stylesheet" type="text/css" href="{{ url('front-end/plugins/owl-carousel/owl.carousel.css')  }}" media="screen">
      <link rel="stylesheet" href="{{ url('front-end/options/optionswitch.css')  }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- GOOGLE FONT -->
      <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
      <!-- CUSTOM CSS -->
      <link href="{{ url('front-end/css/style.css')  }}" rel="stylesheet">
      <link href="{{ url('front-end/css/mycss.css')  }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ url('front-end/css/colors/default.css')  }}" id="option_color">
   </head>
   <body>
      <!--/option-switcher-->
      <div class="main-wrapper">
         <!-- HEADER -->
         @include('front-end.blocks.header')
         <!-- BANNER -->
         @yield('slide')
         <!-- MAIN CONTENT SECTION -->
         @yield('content')
         <!-- FOOTER -->
         @include('front-end.blocks.footer')
      </div>
      <!-- LOGIN MODAL -->
      @include('front-end.blocks.login-modal')
      <!-- SIGN UP MODAL -->
      @include('front-end.blocks.register-modal')

      <script src="{{ url('front-end/js/jquery.min.js')  }}"></script>
      <script src="{{ url('front-end/plugins/jquery-ui/jquery-ui.js')  }}"></script>
      <script src="{{ url('front-end/plugins/bootstrap/js/bootstrap.min.js')  }}"></script>
      <script src="{{ url('front-end/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')  }}"></script>
      <script src="{{ url('front-end/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')  }}"></script>
      <script src="{{ url('front-end/plugins/owl-carousel/owl.carousel.js')  }}"></script>
      <script src="{{ url('front-end/plugins/selectbox/jquery.selectbox-0.1.3.min.js')  }}"></script>
      <script src="{{ url('front-end/plugins/countdown/jquery.syotimer.js')  }}"></script>
      <script src="{{ url('front-end/options/optionswitcher.js')  }}"></script>
      <script src="{{ url('front-end/js/custom.js')  }}"></script>
      @yield("script")
   </body>
</html>