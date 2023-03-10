<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
  <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
     style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
           <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview {{ (request()->is('admin/adminpanelsetting*')||request()->is('admin/treasuries*') )?'menu-open':'' }}     ">
              <a href="#" class="nav-link {{ (request()->is('admin/adminpanelsetting*')||request()->is('admin/treasuries*') )?'active':'' }}">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    الضبط العام
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="{{ route('admin.adminPanelSetting.index') }}" class="nav-link {{ (request()->is('admin/adminpanelsetting*')) ?'active':'' }}">
                       <p>الضبط العام</p>
                    </a>
                 </li>


              </ul>
           </li>
           <li class="nav-item has-treeview      ">
              <a href="#" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    المراقبة والدعم الفني
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
              </ul>
           </li>
        </ul>
     </nav>
     <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
