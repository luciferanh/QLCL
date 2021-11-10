@extends('home')
@section('nav_bar')
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
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
<h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    Danh sách nhân viên
</h3>
    <table class="table">
        <thead>
        <tr>
            <th >ID</th>
            <th >Tên</th>
            <th >Email</th>
            <th >Quyền admin</th>
            <th >&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <th>{{$menu->id}}</th>
                <th><a href="/admin/nangsuat/{{$menu->id}}"  id="name" >{{$menu->name}}</a></th>
                <th>{{$menu->email}}</th>
                <th>{!!  \App\Helpers\Helper::active($menu->is_admin)!!}</th>
                <th>
      
                    <a class="btn btn-success " href="/admin/edit/{{$menu->id}}"><i class="fa fa-edit"></i></a>

                    <a class="btn btn-danger" href="#"  onclick="removeRow({{$menu->id}},'/admin/destroy')" id="btnChangeBg"> <i class="fa fa-trash"></i></a>
      
                </th>
            </tr>
        @endforeach
        
        </tbody>
        @csrf
    </table>
    <div class="card-footer clearfix">    {!!$menus->links()!!}</div>

@endsection
