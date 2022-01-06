<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/AdminSourceFile') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/AdminSourceFile') }}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('/AdminSourceFile') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.include.menu')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            @yield('content')        
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('admin.include.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/AdminSourceFile') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/AdminSourceFile') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/AdminSourceFile') }}/dist/js/adminlte.min.js"></script>
<script src="{{ asset('/AdminSourceFile') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/AdminSourceFile') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
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
</body>
</html>
