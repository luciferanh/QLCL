<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.layout.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('admin.layout.slidebar')
<!-- /.content-wrapper -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            @yield('content')
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->

<!-- ./wrapper -->
@include('admin.layout.footer')
</body>
</html>


