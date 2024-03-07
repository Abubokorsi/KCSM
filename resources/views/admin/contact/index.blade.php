@extends('admin_layouts.app')

@section('page_title', 'All contact info')

@section('title', 'contact')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('admin_content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">ALL contact Data </h3>
    <a href="{{route('contact.create')}}" class="btn btn-info float-right">ADD contact Data</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SI</th>
                    <th>map</th>
                    <th>location</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>details</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($contacts as $key=>$contact)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$contact->map}}</td>
                        <td>{{$contact->location}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->details}}</td>
                        <td>
                            <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-info">Edit</a>
                            <form action="{{route('contact.destroy',$contact->id)}}" method="POST" id="delet{{$contact->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="submit" class="btn btn-danger" onclick="if(confirm('Are you sure to delete this ?')){
                                event.preventDefault();
                                document.getElementById('delet{{$contact->id}}').submit();
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
                    <th>map</th>
                    <th>location</th>
                    <th>phone</th>
                    <th>email</th>
                    <th>details</th>
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