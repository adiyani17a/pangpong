@extends('home')
@section('main')
<style type="text/css">
  

</style>
<div class="row d-flex justify-content-center">
  <div class="col-md-12 col-sm-12">
    <div class="carousel shadow" data-flickity='{ "autoPlay": true }'>
      @foreach ($data as $i => $d)
        <div class=" carousel-cell">
          <img src="{{ url('/') }}/{{ $d->url }}" data-speed="1" class="img-parallax">
        </div>
      @endforeach
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
          $tes = 5;
          @endphp
          @foreach ($berita as $i => $c)
            <article class="news-body clearfix">
              <div class="thumb" style="background-image: url('{{ url('/') }}/{{ $c->url }}') ">
                <a href="{{ url('berita_desa') }}?id={{ $c->berita_id }}"><img width="240" height="135" src="{{ url('/') }}/{{ $c->url }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" sizes="(max-width: 240px) 100vw, 240px"></a>
              </div>
              <div class="thumb-text">
                <h5>
                  <a href="{{ url('berita_desa') }}?id={{ $c->berita_id }}">{{ $c->judul }}
                  </a>
                </h5>
                <div class="meta">
                  <a href="#" title="Posts by Anil Ganti" rel="author">{{ $c->name }}</a>&nbsp;•&nbsp; {{ $c->created_at }}
                </div>
              </div>
            </article>
          @endforeach
          <div class="col-sm-12 text-center" style="padding-bottom: 20px">
            <a href="{{ url('berita_desa_list') }}"><button class="btn btn-primary">Lihat Lainnya</button></a>
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
              @foreach ($perangkat_desa as $i => $p)
                <div class=" carousel-cell cell-perangkat">
                  <img src="{{ url('/') }}/{{ $p->url }}" data-speed="1">
                </div>
              @endforeach
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
{{--         <div class="news-feed pengumuman col-md-12">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>PENGUMUMAN</b></span>
          </div>
          <p class="text-primary">Diupload pada tanggal 08 desember 2018</p>
          <div class="news-body">
            <table class="table">
              @for($i = 0; $i<6 ;$i++)
              <tr>
                <td>{{ $i }}</td>
                <td><a href="">lorem ipsum</a></td>
              </tr>
              @endfor
            </table>
          </div>
        </div> --}}
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

<script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
  

</script>
@include('partials._footer') 
@endsection
