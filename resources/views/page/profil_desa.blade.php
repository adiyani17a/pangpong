@extends('home')
@section('main')
<div class="row d-flex justify-content-center">
  <div class="col-md-12 row">
    <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;overflow-y: auto;">
      <div class="col-md-12 row">
        <div class="col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>PROFIL DESA</b></span>
          </div>
          <img style="width: 100%;height: 400px;" src="{{ asset('assets/image/gapura.jpg') }}" >
          <p style="margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 nopad" style="background-color: #f5f8fa;min-height: 800px;">
      <div class="col-md-12 row post-info" >
        <div class="news-feed col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>BERITA TERBARU</b></span>
          </div>
          <div class="">
            <div class="row">
              @for ($i = 0; $i < 3; $i++)
                <div class="col-sm-4" style="padding: 10px" >
                  <img style="width: 100%" src="{{ asset('assets/image/gapura.jpg') }}" data-speed="1" style="float: left;">
                </div>
                <div class="col-sm-8" style="margin: auto;margin-top: 3%;">
                  <div class="meta" style="font-size: 10px;">
                    <p style="text-decoration: none;color: grey;display: inline" href="#" title="Posts by Anil Ganti" rel="author">Anil Ganti</p>&nbsp;•&nbsp; 2 hours ago
                  </div>
                  <a style="font-size: 10px;" href="#">Pengesahan Gapura Baru</a>
                </div>
              @endfor
            </div>
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
</div>
@include('partials._footer') 
@endsection
