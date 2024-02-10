@extends('admin_layouts.app')

@section('page_title', 'create package')

@section('title', 'package')

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
                <h3 class="card-title">Create package</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('package.store')}}" method="POST" enctype="multipart/form-data">
                @csrf                
                <div class="card-body">
                  <div class="form-group">
                    <label>location</label>
                    <input type="text" class="form-control" name="location" placeholder="location">
                  </div>
                  <div class="form-group">
                    <label >price</label>
                    <input type="text" class="form-control" name="price" placeholder="price">
                  </div>
                  <div class="form-group">
                    <label >day</label>
                    <input type="number" class="form-control" name="day" placeholder="day">
                  </div>
                  <div class="form-group">
                    <label >person</label>
                    <input type="number" class="form-control" name="person" placeholder="person">
                  </div>
                  <div class="form-group">
                    <label >details</label>
                    <textarea class="form-control" name="details" placeholder="details"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="sliderImage">image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="sliderImage">
                        <label class="custom-file-label" for="sliderImage">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{route('package.index')}}" class="btn btn-danger" >Back</a>
                    <input type="reset" class="btn btn-info" value="Reset">
                  <button type="submit" name="submit " class="btn btn-success float-right">Create</button>
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