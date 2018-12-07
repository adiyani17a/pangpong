<!DOCTYPE html>
<html>
@include('partials._head')
@include('partials._custom_css')

@yield('extra_style')
  <body style="background-color: #9999">
    <div class="se-pre-con"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menu1">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/image/Bangkalan.png') }}" width="100" height="100" alt="">
        </a>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menu2">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/image/Bangkalan.png') }}" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler hamburger hamburger--spring-r collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto menu ">
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fa fa-home"></i></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profil Desa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container ">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-sm-12">
          <div class="carousel shadow" data-flickity='{ "autoPlay": true }'>
            <div class=" carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" data-speed="1" class="img-parallax">
            </div>
            <div class=" carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" data-speed="1" class="img-parallax">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-top: 10px;">
      <div class="row">
        <div class="col-md-8" style="height: 500px;">
            <div style="background-color: red;width: 100%;height: 100% ; position: relative;">
              
            </div>
        </div>
        <div class="col-md-4" style="height: 500px;">
            <div style="background-color: red;width: 100%;height: 100% ; background-color: green">
              
            </div>
        </div>
      </div>
    </div>
    @include('partials._script')
    @include('partials._custom_js')
  </body>
</html>