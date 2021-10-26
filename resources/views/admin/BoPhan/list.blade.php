@extends('home')
@section('nav_bar')
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="./bophan" class="nav-link">Danh sách</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="./bp-add" class="nav-link">Thêm</a>
    </li>
@endsection


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th style="width: 500px">Tên</th>
            <th style="width: 100px;">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <th>{{$menu->id}}</th>
                <th>{{$menu->name}}</th>
                <th>
                    <a class="btn btn-primary btn-sm" href="/admin/edit/{{$menu->id}}"><i class="fa fa-edit"></i></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">    {!!$menus->links()!!}</div>
@endsection
