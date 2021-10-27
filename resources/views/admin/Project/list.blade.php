@extends('home')
@section('nav_bar')
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/project/" class="nav-link">Danh sách</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/project/add" class="nav-link">Thêm</a>
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
            <<th  >Số người đang làm</th>>
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
                <th>{{$menu->sl_nv->count()}}</th>
                <th>
                    <a class="btn btn-primary " href="/admin/project/setnv/{{$menu->id}}"><i class="fa fa-id-badge"></i></a>
                    <a class="btn btn-primary " href="/admin/project/edit/{{$menu->id}}"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" href="#"
                       onclick="removeRow({{$menu->id}},'/admin/destroy1')"> <i class="fa fa-trash"></i></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">    {!!$menus->links()!!}</div>
@endsection
