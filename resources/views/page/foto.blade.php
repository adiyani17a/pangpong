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
          <li class="breadcrumb-item active" aria-current="page">Upload Foto</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      	<form action="{{ url('save_carousel') }}" method="post" enctype="multipart/form-data" style="width: 100%">
	      <div class="card">
	        <div class="card-body">
	          <h4 class="card-title">Upload Foto</h4>
	          <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
	            <button type="button" class="btn btn-info btn_modal" data-toggle="modal" data-target="#foto"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah Foto</button>
	          </div>
	          <div class="table-responsive">
          		<table class="table datatable table-bordered">
	      			<thead>
	      				<th>Image</th>
	      				<th>Url</th>
	      				<th>Aksi</th>
	      			</thead>
	      			<tbody>
	      			</tbody>
          		</table>
	          </div>
	        </div>
	      </div>
      	</form>
    </div>
  </div>
</div>

<!-- Modal -->
<form action="{{ url('save_foto') }}" method="post" enctype="multipart/form-data" style="width: 100%">
	<div id="foto" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-m">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header bg-gradient-info">
	        <h4 class="modal-title">Upload Foto</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	        <div class="row">
	            <table class="table ">
	              <tr>
	                <td>
	                  {{ csrf_field() }}
	                  <input type="file" class="dropify tes" name="foto" data-max-file-size="3M" data-default-file="" >
	      			  <input type="hidden" value="" name="id" class="id">
	                </td>
	              </tr>
	            </table>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary simpan" >Save Data</button>
	        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
</form>

<form action="{{ url('delete_foto') }}" method="post" enctype="multipart/form-data" id="delete">
	{{ csrf_field() }}
	<input type="hidden" class="id_delete" name="id">
</form>

<!-- content-wrapper ends -->
@endsection
@section('extra_script')
<script type="text/javascript">
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
            url:'{{ route('datatable_foto') }}',
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
                   targets: 2 ,
                   className: ' tengah'
                },
              
              ],
        columns: [
          {data: 'image', name: 'image'},
          {data: 'url', name: 'url'},
          {data: 'aksi'}
        ]

  	});

	$('.btn_modal').click(function(){
		$(".dropify-clear").click(); 
		$('.id').val('');
	})

	function edit(id,url) {
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

		$('.id').val(id);
		$('#foto').modal('show');
	}

	function hapus(id) {
		$('.id_delete').val(id);
		$('#delete').submit();
	}
	
</script>
@endsection