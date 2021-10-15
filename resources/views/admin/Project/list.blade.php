@extends('home')
@section('nav_bar')
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/project/" class="nav-link">Danh sách</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/project/add" class="nav-link">Thêm</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/project/add" class="nav-link">Thêm Nhân viên vào dự án</a>
    </li>
@endsection


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th >ID</th>
            <th >Tên</th>
            <th >Bộ Phận</th>
            <th >Ngày Bắt đầu</th>
            <<th  >Ngày Kết thúc</th>>
            <th >&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <th>{{$menu->id}}</th>
                <th>{{$menu->name}}</th>
                <th>{{$menu->bophan->name}}</th>
                <th>{{$menu->date_start}}</th>
                <th>{{$menu->date_end}}</th>
                <th>
                    <a class="btn btn-primary btn-sm" href="/admin/project/setnv/{{$menu->id}}"><i class="fas fa-search"></i></a>
                    <a class="btn btn-primary btn-sm" href="/admin/project/edit/{{$menu->id}}"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="#"
                       onclick="removeRow({{$menu->id}},'/admin/destroy1')"> <i class="fas fa-trash"></i></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">    {!!$menus->links()!!}</div>
@endsection
