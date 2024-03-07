@extends('admin_layouts.app')

@section('page_title', 'All package')

@section('title', 'package')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('admin_content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">ALL package Data </h3>
    <a href="{{route('package.create')}}" class="btn btn-info float-right">ADD package Data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SI</th>
                    <th>location</th>
                    <th>price</th>
                    <th>day||person</th>
                    <th>image</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($packages as $key=>$package)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$package->location}}</td>
                        <td>{{$package->price}}</td>
                        <td>{{$package->details}}</td>
                        <td>{{$package->day}}Day||{{$package->person}} Person</td>
                        <td><img src="{{asset('uploads/package/'.$package->image)}}" alt="" style="height: 70px; width:180px;"></td>
                        <td>
                            <a href="{{route('package.edit',$package->id)}}" class="btn btn-info">Edit</a>
                            <form action="{{route('package.destroy',$package->id)}}" method="POST" id="delet{{$package->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="submit" class="btn btn-danger" onclick="if(confirm('Are you sure to delete this ?')){
                                event.preventDefault();
                                document.getElementById('delet{{$package->id}}').submit();
                            }else{
                                event.preventDefault();
                            }">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SI</th>
                    <th>location</th>
                    <th>price</th>
                    <th>details</th>
                    <th>day||person</th>
                    <th>image</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
  </div>
  <!-- /.card-body -->
</div>
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