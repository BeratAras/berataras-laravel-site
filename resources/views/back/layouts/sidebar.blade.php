<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Berat Aras </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::segment(2)=="dashboard") active @endif">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Anasayfa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(Request::segment(2)=="content") active @endif">
      <a class="nav-link @if(Request::segment(2)!="content") collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-edit"></i>
        <span>İçerik</span>
      </a>
      <div id="collapseTwo" class="collapse @if(Request::segment(2)=="content") show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">İçerik Ayarları:</h6>
          <a class="collapse-item @if(Request::segment(2)=="content" and Request::segment(3) == "create") active @endif" href="{{route('content.create')}}">İçerik Ekle</a>
        <a class="collapse-item @if(Request::segment(2)=="content" and !Request::segment(3)) active @endif" href="{{route('content.index')}}">İçerikler</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link" @if(Request::segment(2)=="categories") style="color: white!important" @endif href="{{route('categories')}}">
        <i class="fas fa-fw fa-list" @if(Request::segment(2)=="categories") style="color: white!important" @endif></i>
        <span>Kategoriler</span>
      </a>
    </li>
    

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-table"></i>
        <span>Banner</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Banner Ayarları:</h6>
          <a class="collapse-item" href="utilities-color.html">Banner Ekle</a>
          <a class="collapse-item" href="utilities-border.html">Bannerlar</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Login Screens:</h6>
          <a class="collapse-item" href="login.html">Login</a>
          <a class="collapse-item" href="register.html">Register</a>
          <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Other Pages:</h6>
          <a class="collapse-item" href="404.html">404 Page</a>
          <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Adminler</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-cog"></i>
        <span>Ayarlar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->