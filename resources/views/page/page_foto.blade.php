@extends('home')
@section('main')
<style type="text/css">
  .badan-berita{
    word-wrap: break-word;
  }
  .badan-berita img{
    width: 100% !important;
  }

  .badan-berita p{
    width: 100% !important;
  }

</style>
<div class="row d-flex justify-content-center">
  <div class="col-md-12 row">
    <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;">
      <div class="col-md-12 row">
        <div class="col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>FOTO</b></span>
          </div>
          <div class="col-md-12">
          <div class="news-feed col-md-12">
            <div class="news-body">
              <div class="row">
                @for($i = 0; $i<count($foto) ;$i++)
                  <div class="col-sm-4" style="padding: 10px">
                    <img data-id="{{ $i }}" class="foto" style="width: 100%;cursor: pointer;" src="{{ url('/') }}/{{ $foto[$i]->url }}">
                  </div>
                @endfor
              </div>
            </div>
          </div> 
          </div>
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
<script>
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

@endsection
