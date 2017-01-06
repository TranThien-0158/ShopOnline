<aside class="main-sidebar">
   <section class="sidebar">
      <div class="user-panel">
         <div class="pull-left image">
            <img src="{{ url('resources/upload/avatar/',Auth::user()->avatar) }}" class="img-circle" alt="User Image">
         </div>
         <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
         <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
            </span>
         </div>
      </form>
      <ul class="sidebar-menu">
         <li class="header"><h3 class="text-center">Quản Lý</h3></li>
         <li class="treeview">
            <a href="{{ route('dashboard') }}">
               <i class="ion ion-home"></i>
               <span>Dashboard</span>
            </a>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-hand-paper-o"></i>
               <span>Introduce</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ route('admin.introduce.index') }}"><i class="fa fa-list-alt"></i>List</a></li>
               <li><a href="{{ route('admin.introduce.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-files-o"></i>
               <span>Category</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-list-alt"></i>List</a></li>
               <li><a href="{{ route('admin.category.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-cube"></i>
               <span>Product</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ route('admin.product.index') }}"><i class="fa fa-list-alt"></i>List</a></li>
               <li><a href="{{ route('admin.product.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-line-chart"></i>
               <span>Slide</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ route('admin.slide.index') }}"><i class="fa fa-list-alt"></i>List</a></li>
               <li><a href="{{ route('admin.slide.create') }}"><i class="fa fa-plus"></i>Add new</a></li>
            </ul>
         </li>
         <li class="treeview">
            <a href="#">
               <i class="fa fa-users"></i>
               <span>User</span>
               <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
               </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ route('admin.user.index') }}"><i class="fa fa-list-alt"></i>List</a></li>
               <li><a href="{{ route('admin.user.create') }}"><i class="fa fa-user-plus"></i>Add new</a></li>
            </ul>
         </li>
      </ul>
   </section>
</aside>