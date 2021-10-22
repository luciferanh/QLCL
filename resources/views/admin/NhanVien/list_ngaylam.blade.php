@extends('home')
@section('nav_bar')
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/home" class="nav-link">Danh sách</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="./add" class="nav-link">Thêm</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="./nv-pj" class="nav-link">Nhân viên trong Project</a>
    </li>
@endsection


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th >Tên Nhân viên </th>
            <th >Tên Dự Án</th>
            <th >Năng suất </th>
            @for($t=1;$t<=12;$t++)
            <<th > {!! $t!!}月</th>>
            @endfor
            <th >&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nhanviens as $key => $nhanvien)
        

        @endforeach      
        </tbody>
    </table>
    <div class="card-footer clearfix">    {!!$nhanviens->links()!!}</div>
@endsection
