@extends('system.app')
@section('content')
<title>Vakanesia | Users</title>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Users
      <small>Showing data all users</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Users</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Master Data</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="datatable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Created at</th>
                  <th>Update at</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $key => $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  <td>
                    <form id="{{ $user->id }}" action="{{ url('system/users/'.$user->id)}}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <a href="{{ url('system/users/'.$user->id.'/edit')}}" class="btn btn-info btn-xs"><i class="ion ion-eye"></i></a>
                      <button type="button" class="btn btn-danger btn-xs" onclick="if(confirm('Are You sure?')) { $('#{{ $user->id }}').submit(); }"><i class="ion ion-android-close"></i></button>
                    </form>
                  </td>
                </tr>
              @endforeach
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Created at</th>
                  <th>Update at</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </section>
</div>
<!-- page script -->
<script>
  $(function () {
    // $("#example1").DataTable();
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
