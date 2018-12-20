@extends('admin_main')
@section('content')
<style type="text/css">
	.dropify-render img{
		border-radius: inherit !important;
		width: 100% !important;
		height: 100% !important;
	}
</style>
{{-- @include('master.staff.tambah') --}}
<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12"> 
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Upload Berita</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Upload Berita</h4>
          
          <div class="col-md-12" style="margin-bottom: 30px;">
      			<form action="{{ url('save_berita') }}" method="post" enctype="multipart/form-data" style="width: 100%" id="save_berita">
      				<div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
		            <button type="submit" class="btn btn-info btn_modal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Upload Berita</button>
  		        </div>
  		        <div class="form-group col-md-6 col-sm-6 col-xs-6">
              	<label for="judul">Cover</label>
	            	<input type="file" class="dropify tes" name="foto" data-max-file-size="10M" data-default-file="">
  		        </div>
      				<div class="form-group col-md-12">
                <label for="judul">Judul</label>
                <input type="text" class="form-control judul" id="judul" name="judul" placeholder="judul" required="">
                <input type="hidden" class="form-control id" id="id" name="id" placeholder="id">
                {{ csrf_field() }}
      				  <textarea id="summernote" name="body" style="min-height: 500px;"></textarea>
              </div>
      			</form>
          </div>
          <div class="table-responsive">
      		<table class="table datatable table-bordered">
      			<thead>
      				<th>Image</th>
      				<th>Identitas</th>
      				<th>Url</th>
      				<th>Aksi</th>
      			</thead>
      			<tbody>
      			</tbody>
      		</table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<form action="{{ url('delete_berita') }}" method="post" enctype="multipart/form-data" id="delete">
	{{ csrf_field() }}
	<input type="hidden" class="id_delete" name="id">
</form>

<!-- content-wrapper ends -->
@endsection
@section('extra_script')
<script type="text/javascript">
	$('#summernote').summernote({
		height: 300
	});
	$('.dropify').dropify();

	$('.dropify').dropify({
	    error: {
	        'fileSize': 'The file size is too big.',
	    }
	});

	$('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url:'{{ route('datatable_berita') }}',
            // data:{sdd_sekolah: function() { return $('.sdd_sekolah option:selected').val() },
            //       sdd_kelas: function() { return $('.sdd_kelas option:selected').val() },
            //       sdd_nama_kelas: function() { return $('.sdd_nama_kelas option:selected').val() },
            //       sdd_tahun_ajaran: function() { return $('.sdd_tahun_ajaran option:selected').val() },
            //       sdd_group_spp: function() { return $('.sdd_group_spp option:selected').val() }},
            error:function(){
              var table = $('#datatable').DataTable();
              table.ajax.reload(null, false);
            }
        },
        columnDefs: [
                {
                   targets: 0 ,
                   className: ' tengah'
                },
                {
                   targets: 3 ,
                   className: ' tengah'
                },
              
              ],
        columns: [
          {data: 'image', name: 'image'},
          {data: 'identitas', name: 'identitas'},
          {data: 'url', name: 'url'},
          {data: 'aksi'}
        ]

  	});


	function edit(id,url,nama,jabatan,keterangan) {
		var imagenUrl = url;
		var drEvent = $('.dropify').dropify(
		{
		  defaultFile: imagenUrl
		});
		drEvent = drEvent.data('dropify');
		drEvent.resetPreview();
		drEvent.clearElement();
		drEvent.settings.defaultFile = imagenUrl;
		drEvent.destroy();
		drEvent.init();


		$('#id').val(id);
		$('.nama').val(nama);
		$('.jabatan').val(jabatan);
		$('.keterangan').val(keterangan);
		$('#foto').modal('show');
	}

	function hapus(id) {
		$('.id_delete').val(id);
		$('#delete').submit();
	}
	
</script>
@endsection