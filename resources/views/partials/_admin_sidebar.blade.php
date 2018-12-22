<!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/home')}}" >
          <h3 style="width: 100%">
            <img style="width: 30px;height: 30px;margin: 0" src="{{asset('assets/images/logo1.png')}}" alt="logo"/>
            <label style="margin-top: 10px;margin-bottom: 0px">DARUL ULUM</label>
          </h3>
          <!-- <h1 style="margin:auto; ">Kinaya</h1> -->
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/home')}}">
          <img src="{{asset('assets/atonergi-mini.png')}}" alt="logo"/>
          <!-- <h1 style="margin:auto; ">A</h1> -->
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <div class="search-field ml-4 d-none d-md-block">
          <form class="d-flex align-items-stretch h-100" action="#">
            <div class="input-group">
              <input id="filterInput" type="text" class="form-control bg-transparent border-0" onchange="myFunction()" onfocus="myFunction()" onkeyup="myFunction()" placeholder="Search Menu">
              <div class="input-group-btn">
                <button id="btn-reset" type="button" class="btn bg-transparent px-0 d-none" onclick="btnReset()" style="cursor: pointer;"><i class="fa fa-times"></i></button>
              </div>
              <div class="input-group-addon bg-transparent border-0 search-button">
                <button type="button" class="btn btn-sm bg-transparent px-0">
                  <i class="mdi mdi-magnify"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item nav-logout d-none d-lg-block">
            <a class="nav-link" onclick="document.getElementById('logout-form').submit();" href="#">
              <i class="mdi mdi-power"></i>
            </a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
              {{ csrf_field() }}
          </form>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav" id="ayaysir">
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Setting</span>
                <span class="d-none">
                </span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-settings menu-icon mdi-spin"></i>
              </a>
              <div class="collapse" id="setting">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item" > <a href="" class="nav-link">Home</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('carousel') }}">
                <span class="menu-title">Carousel</span>
                <i class="mdi mdi-view-carousel menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('foto') }}">
                <span class="menu-title">Upload Foto</span>
                <i class="mdi mdi-camera menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('video') }}">
                <span class="menu-title">Upload Video</span>
                <i class="mdi mdi-video menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin_profil_desa') }}">
                <span class="menu-title">Admin Profil Desa</span>
                <i class="mdi mdi-user  menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin_wilayah') }}">
                <span class="menu-title">Admin Wilayah</span>
                <i class="mdi mdi-user  menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin_pemerintahan') }}">
                <span class="menu-title">Admin Pemerintahan</span>
                <i class="mdi mdi-user  menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('potensi') }}">
                <span class="menu-title">Upload Potensi</span>
                <i class="mdi mdi-user  menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('berita') }}">
                <span class="menu-title">Upload Berita</span>
                <i class="mdi mdi mdi-newspaper menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('pengumuman') }}">
                <span class="menu-title">Upload Pengumuman</span>
                <i class="mdi mdi-notification-clear-all  menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('perangkat_desa') }}">
                <span class="menu-title">Perangkat Desa</span>
                <i class="mdi mdi-notification-clear-all  menu-icon"></i>
              </a>
            </li>
          </ul>        
        </nav>





