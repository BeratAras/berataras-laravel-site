<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{url('front/images/settings/b.png')}}" alt="Homepage" height="30">
      </div>
      <div class="sidebar-brand-text mx-3">Berat Aras </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Request::segment(2)=="dashboard") active @endif">
      <a class="nav-link" href="{{route('dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Site
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item @if(Request::segment(2)=="content") active @endif">
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
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
      <a class="nav-link" @if(Request::segment(2)=="categories") style="color: white!important" @endif href="{{route('categories')}}">
        <i class="fas fa-fw fa-list" @if(Request::segment(2)=="categories") style="color: white!important" @endif></i>
        <span>Çalışmalar</span>
      </a>
    </li> --}}
    
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(Request::segment(2)=="github") active @endif">
      <a class="nav-link @if(Request::segment(2)!="github") collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
        <i class="fab fa-fw fa-git"></i>
        <span>Github</span>
      </a>
      <div id="collapseThree" class="collapse @if(Request::segment(2)=="github") show @endif" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Github Ayarları:</h6>
          <a class="collapse-item @if(Request::segment(2)=="github" and Request::segment(3) == "create") active @endif" href="{{route('github.create')}}">Repo Ekle</a>
          <a class="collapse-item @if(Request::segment(2)=="github" and !Request::segment(3)) active @endif" href="{{route('github.index')}}">Repolar</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-comment-dots"></i>
        <span>Yorumlar</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Bionluk Yorumlar:</h6>
          <a class="collapse-item" href="{{route('bionluk_comment.create')}}">Ekle</a>
          <a class="collapse-item" href="{{route('bionluk-comments.index')}}">Gör</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Diğer:</h6>
          <a class="collapse-item" href="404.html">Ekle</a>
          <a class="collapse-item" href="blank.html">Gör</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(Request::segment(2)=="banner") active @endif">
      <a class="nav-link @if(Request::segment(2)!="banner") collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-photo-video"></i>
        <span>Banner</span>
      </a>
      <div id="collapseFour" class="collapse @if(Request::segment(2)=="banner") show @endif" aria-labelledby="headingFour" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Github Ayarları:</h6>
          <a class="collapse-item @if(Request::segment(2)=="banner" and Request::segment(3) == "create") active @endif" href="{{route('banner.create')}}">Banner Ekle</a>
          <a class="collapse-item @if(Request::segment(2)=="banner" and !Request::segment(3)) active @endif" href="{{route('banner.index')}}">Banner</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Diğer Ayarlar
    </div>

    

    <!-- Nav Item - Charts -->
    <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-users-cog"></i>
        <span>Adminler</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('settings.index')}}">
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