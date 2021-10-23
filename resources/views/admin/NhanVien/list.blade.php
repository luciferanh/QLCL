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
    <li class="nav-item d-none d-sm-inline-block">
        <a href="./ngaylam" class="nav-link">Thêm ngày làm Dự kiến</a>
    </li>
@endsection


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th style="width: 500px">Tên</th>
            <th style="width: 500px">Email</th>
            <<th style="width: 500px" >Quyền admin</th>>
            <th style="width: 100px;">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <th>{{$menu->id}}</th>
                <th><a href="/admin/nangsuat/{{$menu->id}}"  >{{$menu->name}}</th>
                <th>{{$menu->email}}</th>
                <th>{!!  \App\Helpers\Helper::active($menu->is_admin)!!}</th>
                <th>
                    <a class="btn btn-primary btn-sm" href="/admin/edit/{{$menu->id}}"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="#"  onclick="removeRow({{$menu->id}},'/admin/destroy')"> <i class="fas fa-trash"></i></a> 
                </th>
            </tr>
        @endforeach
        @csrf
        </tbody>
    </table>

@endsection
