<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SISTEM INFORMASI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://yt3.ggpht.com/yti/AHXOFjWrATaJHp-NW0Hd7f-gmymzdAVkuQKWlLVpgnlzAQ=s88-c-k-c0x00ffffff-no-rj-mo" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">APIP</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <b style="color: white; margin-left:20px;">Fitur</b> <br>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            
          <li class="nav-item">
            <a href="{{ url('/profile') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/collage') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}" class="nav-link" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
              <p>
                Collage Experience
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
              
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>