@extends('admin_main')
@section('content')
<style type="text/css">
  .dropify-render img{
    border-radius: inherit !important;
    width: 100% !important;
    height: 100% !important;
  }
  .note-form-group{
    display: none;
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
          <li class="breadcrumb-item active" aria-current="page">Upload Pemerintahan</li>
        </ol>
      </nav>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Upload Pemerintahan</h4>
          
          <div class="col-md-12" style="margin-bottom: 30px;">
            <form action="{{ url('save_pemerintahan') }}" method="post" enctype="multipart/form-data" style="width: 100%" id="save_berita">
              <div class="col-md-12 col-sm-12 col-xs-12" align="right" style="margin-bottom: 15px;">
                <button type="submit" class="btn btn-info btn_modal"><i class="fa fa-plus"></i>&nbsp;&nbsp;Upload Pemerintahan</button>
              </div>
      
              <div class="form-group col-md-12">
                <input type="hidden" class="form-control id" value="{{ $Pemerintahan->id }}" id="id" name="id" placeholder="id">
                {{ csrf_field() }}
                <textarea id="summernote" name="body" style="min-height: 500px;"></textarea>
              </div>
            </form>
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
  $(document).ready(function(){
    $('#summernote').summernote('destroy');
    $("#summernote").summernote("code",'{!! $Pemerintahan->body !!}');
  });
  
  
</script>
@endsection