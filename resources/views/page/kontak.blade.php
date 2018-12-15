@extends('home')
@section('main')
<style type="text/css">
  .contact li{
    list-style: none;
    font-size: 25px;
  }

  .table td a{
    text-decoration: none;
  }

  .table td a:hover{
    color: hotpink;
  }
</style>
<div class="row d-flex justify-content-center">
  <div class="col-md-12 col-sm-12">
    
  </div>
  <div class="col-md-12 row">
    <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;overflow-y: auto;">
      <div class="col-md-12 row">
        <div class="col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>Kontak</b></span>
          </div>
          <table class="table" style="font-size: 25px;">
            <tr>
              <td><i style="color: blue" class="fa fa-facebook-square"></i></td>
              <td> <a href="https://www.facebook.com">&nbsp;&nbsp;&nbsp;www.facebook.com/pangpong</a></td>
            </tr>
            <tr>
              <td><i style="color: purple" class="fa fa-instagram"></i></td>
              <td> <a href="https://www.instagram.com">&nbsp;&nbsp;&nbsp;@pangpong</a></td>
            </tr>
            <tr>
              <td><i style="color: green" class="fa fa-whatsapp"></i></td>
              <td> <p>&nbsp;&nbsp;&nbsp;0896521378</p></td>
            </tr>
            <tr>
              <td><i style="color: grey" class="fa fa-phone"></i></td>
              <td> <p>&nbsp;&nbsp;&nbsp;0896521378</p></td>
            </tr>
          </table>
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
