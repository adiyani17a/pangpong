@extends('home')
@section('main')
<style type="text/css">
  .spin{
    min-height:500px;
    max-height:500px;
    text-align: center;
    padding-top: 200px;
    font-size: 50px;
    color: #3598db;
  }
</style>
<div class="row d-flex justify-content-center">
  <div class="col-md-12 row">
    <div class="col-md-8 news-box nopad" style="background-color: #f5f8fa;min-height: 800px;overflow-y: auto;">
      <div class="col-md-12 row">
        <div class="news-feed col-md-12" style="">
          <div class="news-head" style="width: 100%">
            <span class="text-light judul"><b>POTENSI DESA</b></span>
          </div>
          @php
          $tes = 4;
          @endphp
          <div class="news-append">
            
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
              @for($i = 0; $i<count($foto) ;$i++)
                @if ($i <= 8 )
                  <div class="col-sm-4" style="padding: 10px">
                    <img data-id="{{ $i }}" class="foto" style="width: 100%;cursor: pointer;" src="{{ url('/') }}/{{ $foto[$i]->url }}">
                  </div>
                @endif
              @endfor
              <div class="col-sm-12 text-center">
                <a href="{{ url('/page_foto') }}"><button class="btn btn-primary">Lihat Lainnya</button></a>
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
<script src="{{asset('assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript">
  var page = 1;
  $(document).ready(function(){
    appendNews();
    $('.load').removeClass('se-pre-con');
  });

  $(document).on('click','.direct',function(){
    page = $(this).text();
    appendNews();
  });

  $(document).on('click','.next',function(){
    page = page*1 + 1;
    appendNews();
  });

  $(document).on('click','.previous',function(){
    page = page*1 - 1;

    appendNews();
  });
  function appendNews() {
    var loading = '<div class="col-md-12 spin">'+
                  '<i class="fa fa-circle-o-notch fa-spin"></i>'+
                  '</div>';
    $('.news-append').html(loading);
    $.ajax({
        url:'{{ route('page_potensi_desa_list') }}?page='+page,
        type:'get',
        success:function(data){
          $('.news-append').html(data);
          $('.page-link').not(':last').not(':eq(0)').addClass('direct');
          $('.page-link').eq(0).addClass('previous');
          $('.page-link').last().addClass('next');
          $('.page-link').removeAttr('href');
        },
        error:function(){
          appendNews();
        } 
    });
  }
  
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
@endsection
