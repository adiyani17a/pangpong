@extends('admin_main')
@section('content')

{{-- @include('master.staff.tambah') --}}
<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12"> 
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a></li>
          <li class="breadcrumb-item">Master</li>
          <li class="breadcrumb-item active" aria-current="page">Carousel</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      	<form action="{{ url('save_carousel') }}" method="post" enctype="multipart/form-data" style="width: 100%">
	      <div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Carousel</h4>
	          <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
	            <button type="submit" class="btn btn-info btn_modal" data-toggle="modal" data-target="#tambah-akun"><i class="fa fa-plus"></i>&nbsp;&nbsp;Simpan Carousel</button>
	          </div>
	          <div class="table-responsive">
	          		@for ($i = 0; $i < 5; $i++)
		          		<div class="col-sm-8">
		          			{{ csrf_field() }}
		          			<label>Carousel {{ $i+1 }}</label>
		          			@if ($data != null)
			          			<input type="file" class="dropify" name="foto[]" data-max-file-size="6M" data-default-file="{{ url('/') }}/{{ $data[$i]->url }}">
			          			<input type="hidden" value="{{ $data[$i]->id }}" name="id[]" >
			          		@else
			          			<input type="file" class="dropify" name="foto[]" data-max-file-size="6M" >
			          			<input type="hidden" value="" name="id[]">
		          			@endif
			          	</div>
		          	@endfor
	          </div>
	        </div>
	      </div>
      	</form>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
@section('extra_script')
<script type="text/javascript">
	$('.dropify').dropify();

	$('.dropify').dropify({
	    error: {
	        'fileSize': 'The file size is too big).',
	    }
	});
	
</script>
@endsection