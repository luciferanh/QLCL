@include('admin.layout.navbar')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/home" class="brand-link">
        <img src="/PNG/header_logo.jpg"  style="opacity: .8"  height="50" width="230">
    </a>
    <!-- Sidebar -->
    <ul class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/admin/home" class="d-block">SORIMACHI</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if(\Illuminate\Support\Facades\Session::get('is_admin')=='1')
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fa fa-tachometer-alt"></i>
                            <p>
                                Master
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/admin/home" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>Nhân viên</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/project" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>Dự án</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/bophan" class="nav-link">
                                    <i class="fa fa-circle nav-icon"></i>
                                    <p>Bộ phận</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-tree"></i>
                        <p>
                            Nghiệp vụ
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>Icons</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            Thống kê
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/forms/general.html" class="nav-link">
                                <i class="fa fa-circle nav-icon"></i>
                                <p>General Elements</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!-- /.row (main row) -->
        </nav><!-- /.container-fluid -->
    </ul>
    <!-- /.content -->
</aside>
