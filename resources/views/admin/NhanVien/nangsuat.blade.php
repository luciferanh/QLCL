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
        <a href="./ngaylam" class="nav-link">Thêm ngày làm của nhân viên</a>
    </li>
@endsection


@section('content')
    <div class="row" style="margin-top: 40px;">
        <div class="col">

            <h2>{{$title}} của các dự án</h2>

        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th style="width: 500px">Tên Dự Án</th>
            <th style="width: 500px">Chúc vụ</th>
            <<th style="width: 500px" >Năng suất</th>>
            <th style="width: 100px;">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $key => $menu)
            <tr>
                <th>{{$menu->id}}</th>
                <th>{{$menu->project->name}}</th>
                <th>{{$menu->is_quanly==1?'Quản lý':'Nhân viên'}}</th>
                <th>
                    <input  name="nangsuat" id="nangsuat" value="{{$menu->nangsuat}}">
                </th>
                <th></th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div >
        <button type="submit" class="btn btn-primary">Edit Năng Suất</button>
    </div>
    <div class="row" style="margin-top: 40px;">
        @foreach($menus as $key => $menu)
            @if($menu->is_quanly==1)
                <div class="col">
                    <h2>Thông số quản lý dự án {{$menu->project->name}} </h2>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        @for( $t=1;$t<=12;$t++)
                        <th >{{$t}}月</th>
                        @endfor
                    </tr>
                    </thead>
                    <tbody>
                    @for( $t=1;$t<=12;$t++)
                        <th>
                        <input style="width: 50px;" name="thongsoquanly{{$t}}" id="thongsoquanly"/>
                        </th>
                    @endfor

                    </tbody>
                </table>
            @endif
        @endforeach

    </div>
    <div >
        <button type="submit" class="btn btn-primary">Edit Thông số quản lý</button>
    </div>

@endsection
