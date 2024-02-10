@extends('admin_layouts.app')

@section('page_title', 'All booking')

@section('title', 'booking')

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('admin_content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">ALL booking Data </h3>
    <a href="{{route('booking.create')}}" class="btn btn-info float-right">ADD</a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SI</th>
                    <th>name</th>
                    <th>email</th>
                    <th>date</th>
                    <th>time</th>
                    <th>destination</th>
                    <th>person</th>
                    <th>message</th>
                    <th>status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($bookings as $key=>$booking)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$booking->name}}</td>
                        <td>{{$booking->email}}</td>
                        <td>{{$booking->time}}</td>
                        <td>{{$booking->date}}</td>
                        <td>{{$booking->destination}}</td>
                        <td>{{$booking->person}}</td>
                        <td>{{$booking->message}}</td>
                        <td>
                         @if($booking->status == 0)
                         <form action="confirm{{$booking->id}}" method="POST" id="confirm{{$booking->id}}">
                          @csrf
                         </form>
                         <a href="" class="btn btn-success btn-sm" onclick="if(confirm('are you sure to confirm this')){
                          event.preventDefault();
                          document.getElementById('confirm{{$booking->id}}').submit();
                         }else{
                          event.preventDefault();
                         }">Confirm</a> 
                         <a href="" class="btn btn-warning btn-sm" onclick="if(confirm('are you sure to pending this')){
                          event.preventDefault();
                          document.getElementById('confirm{{$booking->id}}').submit();
                         }else{
                          event.preventDefault();
                         }">Pending</a> 
                         @elseif($booking->status == 1)
                         <form action="complet{{$booking->id}}" method="POST" id="complet{{$booking->id}}">
                          @csrf
                         </form>
                         <a href="" class="btn btn-primary" onclick="if(confirm('are you sure to complet this')){
                          event.preventDefault();
                          document.getElementById('complet{{$booking->id}}').submit();
                         }">Completed</a>
                         @else
                         <p class="text-success">order complet</p>
                         @endif

                        </td>
                        <td>
                            <form action="{{route('booking.destroy',$booking->id)}}" method="POST" id="delet{{$booking->id}}">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="submit" class="btn btn-danger" onclick="if(confirm('Are you sure to delete this ?')){
                                event.preventDefault();
                                document.getElementById('delet{{$booking->id}}').submit();
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
                    <th>name</th>
                    <th>email</th>
                    <th>date</th>
                    <th>time</th>
                    <th>destination</th>
                    <th>person</th>
                    <th>message</th>
                    <th>status</th>
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