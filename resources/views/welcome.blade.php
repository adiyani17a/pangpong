<!DOCTYPE html>
<html>
@include('partials._head')
@include('partials._custom_css')

@yield('extra_style')
  <body style="background-image: url('{{ asset('assets/image/batik.jpg') }}');background-repeat: no-repeat;
    background-size: cover;" >
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
              <a class="nav-link" href="#">Profil Desa</a>
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
    <div class="container carousel-container" >
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
        <div class="col-md-12 row">
          <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;overflow-y: auto;">
            <div class="col-md-12 row">
              <div class="news-feed col-md-12" style="">
                <div class="news-head" style="width: 100%">
                  <span class="text-light judul"><b>Berita Desa</b></span>
                  
                </div>
                @php
                $tes = 4;
                @endphp
                @for($d = 0; $d < $tes ;$d++)
                  <article class="news-body clearfix">
                    <div class="thumb" style="background-image: url('{{ asset('assets/image/gapura.jpg') }}') ">
                      <a href="#"><img width="240" height="135" src="{{ asset('assets/image/gapura.jpg') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" sizes="(max-width: 240px) 100vw, 240px"></a>
                    </div>
                    
                    <div class="thumb-text">
                      <h5>
                        <a href="#">Today’s List of Paid Games That Are Free at the Play Store Including Hexasmash Pro and More
                        </a>
                      </h5>
                      <div class="meta">
                        <a href="#" title="Posts by Anil Ganti" rel="author">Anil Ganti</a>&nbsp;•&nbsp; 2 hours ago
                        </div>
                    </div>

                  </article>
                @endfor
                <div class="col-sm-12 text-center" style="padding-bottom: 20px">
                  <button class="btn btn-primary">Lihat Lainnya</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 nopad" style="background-color: #f5f8fa;min-height: 800px;">
            <div class="col-md-12 row post-info" >
              <div class="news-feed col-md-12">
                <div class="news-head" style="width: 100%">
                  <span class="text-light judul"><b>PERANGKAT DESA</b></span>
                </div>
                <div class="news-side">
                  <div class="perangkat shadow" data-flickity='{ "autoPlay": true }'>
                    <div class=" carousel-cell cell-perangkat">
                      <img src="{{ asset('assets/image/avatar3.png') }}" data-speed="1">
                      <p>tes</p>
                    </div>
                    <div class=" carousel-cell cell-perangkat">
                      <img src="{{ asset('assets/image/avatar04.png') }}" data-speed="1">
                    </div>
                    <div class=" carousel-cell cell-perangkat">
                      <img src="{{ asset('assets/image/faces/face1.jpg') }}" data-speed="1">
                    </div>
                    <div class=" carousel-cell cell-perangkat">
                      <img src="{{ asset('assets/image/faces/face2.jpg') }}" data-speed="1">
                    </div>
                  </div>
                </div>
             {{--    <div class="news-text" style="margin-top: 20px;font-size: 14px;">
                  <table class="table">
                    <tr>
                      <th>Nama</th>
                      <th>: Ansori</th>
                    </tr>
                    <tr>
                      <th>Tempat/Tanggal Lahir</th>
                      <th>: Madura, ?? ???? ??</th>
                    </tr>
                    <tr>
                      <th>Masa Jabatan</th>
                      <th>: ?? ???? ??</th>
                    </tr>
                  </table>
                </div> --}}
              </div>
              <div class="news-feed col-md-12">
                <div class="news-head" style="width: 100%">
                  <span class="text-light judul"><b>FOTO</b></span>
                </div>
                <div class="news-body">
                  <div class="row">
                    @for($i = 0; $i<6 ;$i++)
                      <div class="col-sm-4" style="padding: 10px">
                        <img style="width: 100%" src="{{ asset('assets/image/Bangkalan.png') }}" data-speed="1">
                      </div>
                    @endfor
                    <div class="col-sm-12 text-center">
                      <button class="btn btn-primary">Lihat Lainnya</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="news-feed video col-md-12">
                <div class="news-head" style="width: 100%">
                  <span class="text-light judul"><b>VIDEO</b></span>
                </div>
                
                <div class="news-body">
                  <div class="row">
                    <div class="col-sm-12" style="padding: 10px">
                      <img style="width: 100%" src="{{ asset('assets/image/Bangkalan.png') }}" data-speed="1">
                    </div>
                    <div class="col-sm-12 text-center">
                      <button class="btn btn-primary">Lihat Lainnya</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="news-feed pengumuman col-md-12">
                <div class="news-head" style="width: 100%">
                  <span class="text-light judul"><b>PENGUMUMAN</b></span>
                </div>
                <p class="text-primary">Diupload pada tanggal 08 desember 2018</p>
                <div class="news-body">
                  <table class="table">
                    @for($i = 0; $i<6 ;$i++)
                    <tr>
                      <td>{{ $i+1 }}</td>
                      <td><a href="">lorem ipsum</a></td>
                    </tr>
                    @endfor
                  </table>
                </div>
              </div>
              <div class="news-feed col-md-12">
                <div class="news-head" style="width: 100%">
                  <span class="text-light judul"><b>Statistik</b></span>
                </div>
                
                <div class="news-body">
                  <div class="">
                    <img style="width: 100%" src="{{ asset('assets/image/Bangkalan.png') }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="height: 300px;">
          <div style="background-color: #f5f8fa;width: 100%;height: 100% ">
            {{-- <div id="peta" style="height:300px;width:500px;">
              </div>
            </td> --}}
          </div>
        </div>
      </div>
    </div>
 {{--    <div class="container" style="margin-top: 10px;">
      <div class="row">
        
      </div>
    </div> --}}
    @include('partials._script')
    @include('partials._custom_js')
  </body>
</html>