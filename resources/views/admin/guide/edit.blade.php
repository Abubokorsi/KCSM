@extends('admin_layouts.app')

@section('page_title', 'guide')

@section('title', 'guide')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit guide</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('guide.update',$guide->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" name="name" value="{{$guide->name}}">
                  </div>
                  <div class="form-group">
                    <label >postion</label>
                    <input type="text" class="form-control" name="postion" value="{{$guide->postion}}">
                  </div>
                  <div class="form-group">
                    <label >facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{$guide->facebook}}">
                  </div>
                  <div class="form-group">
                    <label >twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{$guide->twitter}}">
                  </div>
                  <div class="form-group">
                    <label >instagram</label>
                    <input type="text" class="form-control" name="instagram" value="{{$guide->instagram}}">
                  </div>

                  <div class="form-group">
                    <label for="guideImage">image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="guideImage">
                        <label class="custom-file-label" for="guideImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                    <img src="{{asset('uploads/guide/'.$guide->image)}}" alt="" style="height: 80px; width:120px;">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{route('guide.index')}}" class="btn btn-danger" >Back</a>
                    <input type="reset" class="btn btn-info" value="Reset">
                  <button type="submit" name="submit " class="btn btn-success float-right">Upload</button>
                </div>
              </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@push('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('backend')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend')}}/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
