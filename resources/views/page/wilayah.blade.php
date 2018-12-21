@extends('home')
@section('main')
<div class="row d-flex justify-content-center">
  <div class="col-md-12 row">
    <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;overflow-y: auto;">
      <div class="col-md-12 row">
        <div class="col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>WILAYAH</b></span>
          </div>
          {!! $desa->body !!}
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
              @for ($i = 0; $i < count($berita); $i++)
                <div class="col-sm-4" style="padding: 10px" >
                  <a href="{{ url('berita_desa') }}?id={{ $berita[$i]->id }}"><img style="width: 100%" src="{{ asset('/') }}/{{ $berita[$i]->url }}" data-speed="1" style="float: left;"></a>
                </div>
                <div class="col-sm-8" style="margin: auto;margin-top: 3%;">
                  <div class="meta" style="font-size: 10px;">
                    <p style="text-decoration: none;color: grey;display: inline" href="#" title="Posts by Anil Ganti" rel="author">{{ $berita[$i]->name }}</p>&nbsp;•&nbsp; {{ $berita[$i]->created_at }}
                  </div>
                  <a style="font-size: 10px;" href="{{ url('berita_desa') }}?id={{ $berita[$i]->id }}">{{ $berita[$i]->judul }}</a>
                </div>
              @endfor
            </div>
          </div>
        </div>
        <div class="news-feed col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>FOTO</b></span>
          </div>
          <div class="news-body">
            <div class="row">
              @for($i = 0; $i<count($foto) ;$i++)
                @if ($i <= 8 )
                  <div class="col-sm-4" style="padding: 10px">
                    <img data-id="{{ $i }}" class="foto" style="width: 100%;cursor: pointer;" src="{{ url('/') }}/{{ $foto[$i]->url }}">
                  </div>
                @endif
              @endfor
              <div class="col-sm-12 text-center">
                <a href="{{ url('/foto') }}"><button class="btn btn-primary">Lihat Lainnya</button></a>
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
</div>
@include('partials._footer') 
@endsection
