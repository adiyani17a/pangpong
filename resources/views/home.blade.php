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
    <div id="foto" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-lg">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header bg-gradient-info">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	            <table class="table ">
	              <tr>
	                <td>
	                  {{ csrf_field() }}
	                  <div class="col-md-12">
	                    <img style="width: 100%;max-height: 420px;" class="preview" src="" >
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
    @include('partials._script')
    @include('partials._custom_js')

  </body>
</html>