@extends('home')
@section('main')
<style type="text/css">
  .arrow-left{
    position: absolute;
    top: 45%;
    left: 4% ;
    opacity: 0;
    background-color: grey;
    padding: 10px;
    z-index: 1;
    -webkit-transition: opacity 0.5s; /* Safari */
    transition: opacity 0.5s;
  }

  .arrow-right{
    position: absolute;
    top: 45%;
    right: 4% ;
    opacity: 0;
    background-color: grey;
    padding: 10px;
    z-index: 1;
    -webkit-transition: opacity 0.5s; /* Safari */
    transition: opacity 0.5s;
  }

  .left-side{
    width: 50%;
    position: absolute;
    height: 100%;
    top: 0px;
    left: 0px;
    opacity: 0;
    background-color: grey;
    cursor: pointer;
    z-index: 2
  }

  .right-side{
    width: 50%;
    position: absolute;
    height: 100%;
    top: 0px;
    right: 0px;
    opacity: 0;
    background-color: grey;
    cursor: pointer;
    z-index: 2
  }

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
          @for($d = 0; $d < count($berita) ;$d++)
            <article class="news-body clearfix">
              <div class="thumb" style="background-image: url('{{ url('/') }}/{{ $berita[$d]->url }}') ">
                <a href="#"><img width="240" height="135" src="{{ url('/') }}/{{ $berita[$d]->url }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" sizes="(max-width: 240px) 100vw, 240px"></a>
              </div>
              <div class="thumb-text">
                <h5>
                  <a href="#">{{ $berita[$d]->judul }}
                  </a>
                </h5>
                <div class="meta">
                  <a href="#" title="Posts by Anil Ganti" rel="author">{{ $berita[$d]->name }}</a>&nbsp;•&nbsp; {{ $berita[$d]->created_at }}
                </div>
              </div>

            </article>
          @endfor
          <div class="col-sm-12 text-center" style="padding-bottom: 20px">
            <a href="{{ url('berita_desa') }}"><button class="btn btn-primary">Lihat Lainnya</button></a>
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
                <td>{{ $i }}</td>
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
{{--       <div id="peta" style="height:300px;width:500px;">
        </div>
      </td> --}}
    </div>
  </div>
</div>
<div id="foto" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-gradient-info">
        <h4 class="modal-title">FOTO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
            <table class="table ">
              <tr>
                <td>
                  {{ csrf_field() }}
                  <div class="col-md-12">
                    <img style="width: 100%" class="preview" src="">
                    <input type="hidden" class="image_row">
                    <div class="arrow-left">
                      <i class="fa fa-arrow-left" style="color: #fff"></i>
                    </div>
                    <div class="arrow-right">
                      <i class="fa fa-arrow-right" style="color: #fff"></i>
                    </div>
                    <div class="left-side" onmouseenter="hov('L')" onmouseleave="out('L')" onclick="act('prev')"></div>
                    <div class="right-side" onmouseenter="hov('R')" onmouseleave="out('R')" onclick="act('next')"></div>
                  </div>
                </td>
              </tr>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
  $('.foto').click(function(){
    var url = $(this).attr('src');
    var index  = $(this).data('id');
    $('.preview').attr('src',url);
    $('.image_row').val(index);
    $('#foto').modal('show');
  });

  function hov(param) {
    if (param == 'L') {
      $('.arrow-left').css('opacity',0.8);
    }else{
      $('.arrow-right').css('opacity',0.8);
    }
  }

  function out(param) {
    if (param == 'L') {
      $('.arrow-left').css('opacity',0);
    }else{
      $('.arrow-right').css('opacity',0);
    }
  }

  function act(param) {
    if (param == 'prev') {
      var index = $('.image_row').val();
      var foto = $('.foto').eq(index*1-1);
      console.log(index*1-1);
      if (foto != null) {
        var url = foto.attr('src');
        $('.image_row').val(foto.data('id'));
        $('.preview').attr('src',url);
      }
    }else{
      var index = $('.image_row').val();
      var foto = $('.foto').eq(index*1+1);
      if (foto.length != 0) {
        var url = foto.attr('src');
        $('.image_row').val(foto.data('id'));
        $('.preview').attr('src',url);
      }else{
        var foto = $('.foto').eq(0);
        var url = foto.attr('src');
        $('.image_row').val(0);
        $('.preview').attr('src',url);
      }
    }
  }

</script>
@include('partials._footer') 
@endsection
