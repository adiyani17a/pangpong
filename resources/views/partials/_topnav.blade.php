<div class="se-pre-con" ></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light menu1">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/image/Bangkalan.png') }}" width="100" height="100" alt="">
        </a>
      </div>
      <div class="col-sm-8 text-light" >
        <div style="padding-top: 10px">
          <h6><b>Desa Pangpong</b></h6>
          <h6 style="font-size: 16px"><b>Kecamatan Labang</b></h6>
          <h6 style="font-size: 14px"><b>Kabupaten Bangkalan</b></h6>
          <p style="font-size: 12px;">Jln. bla bla bla bla</p>
        </div>
      </div>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light menu2">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
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
          <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home"></i></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/profil_desa') }}">Profil Desa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Wilayah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pemerintahan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Berita Desa</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produk Unggulan
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Singpong</a>
            <a class="dropdown-item" href="#">Nimpong</a>
            <a class="dropdown-item" href="#">Nakpong</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Galery
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Nak</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>