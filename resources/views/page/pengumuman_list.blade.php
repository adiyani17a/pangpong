@extends('home')
@section('main')
<div class="row d-flex justify-content-center">
  <div class="col-md-12 row">
    <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;overflow-y: auto;">
      <div class="col-md-12 row">
        <div class="news-feed col-md-12" style="">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>pengumuman</b></span>
            
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
{{--       <div id="peta" style="height:300px;width:500px;">
        </div>
      </td> --}}
    </div>
  </div>
</div>
@include('partials._footer') 
@endsection
