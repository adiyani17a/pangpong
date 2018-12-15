<!DOCTYPE html>
<html>
@include('partials._head')
@include('partials._custom_css')

@yield('extra_style')
  <body style="background-image: url('{{ asset('assets/image/batik.jpg') }}');background-repeat: no-repeat;
    background-size: cover;" >
    @include('partials._topnav')
    <div class="container carousel-container" >
      @yield('main')
    </div>
    @include('partials._script')
    @include('partials._custom_js')
  </body>
</html>