<header class="main-header">
   <a href="#" class="logo">
   <span class="logo-mini">
   <img src="{{ url('admin_assets/dist/img/shopping-bag-flat.png') }}" alt="" width="45px" height="45px">
   </span>
   <span class="logo-lg">
   <img src="{{ url('admin_assets/dist/img/shopping-bag-flat.png') }}" alt="" width="45px" height="45px">
   <b>Cry</b>Magic</span>
   </a>
   <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
         <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <img src="{{ url('resources/upload/avatar/',Auth::user()->avatar) }}" class="user-image" alt="User Image">
               <span class="hidden-xs">{{ Auth::user()->name }}</span>
               </a>
               <ul class="dropdown-menu">
                  <li class="user-header">
                     <img src="{{ url('resources/upload/avatar/',Auth::user()->avatar) }}" class="img-circle" alt="User Image">
                     <p>
                        {{ Auth::user()->name }}
                        <small>Phone number: (+84)1658890216</small>
                     </p>
                  </li>
                  <li class="user-body">
                     <div class="row">
                        <div class="text-center">
                           Web Developer Full Stack
                        </div>
                     </div>
                  </li>
                  <li class="user-body">
                     <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                     </div>
                     <div class="pull-right">
                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Logout</a>
                     </div>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>
</header>