<!DOCTYPE html>
<html>
@include('partials._head')
@include('partials._custom_css')

@yield('extra_style')
  <body style="background-color: #ffff">
    <div class="se-pre-con"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/image/logo.png') }}" width="30" height="30" alt="">
        </a>
        <button class="navbar-toggler hamburger hamburger--spring-r collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto menu">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container shadow">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-sm-12">
          <div class="carousel" data-flickity='{ "autoPlay": true }'>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
            <div class="carousel-cell">
              <img src="{{ asset('assets/image/gapura.jpg') }}" />
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('partials._script')
    @include('partials._custom_js')
  </body>
</html>