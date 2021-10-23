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
<!-- Editable table -->
<div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
        {{$title}} của các dự án
    </h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"
    ></span>
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <tr>
                <th style="width: 50px">ID</th>
                <th style="width: 500px">Tên Dự Án</th>
                <th style="width: 500px">Chúc vụ</th>
                <th style="width: 500px" >Năng suất</th>
                <th style="width: 500px" >Thay đổi</th>
            </tr>
          </thead>
          <tbody>
               @foreach($menus as $key => $menu)
            <tr>
                <td class="pt-3-half" contenteditable="true">{{$menu->id}}</td>
                <td class="pt-3-half" contenteditable="true">{{$menu->project->name}}</td>
                <td class="pt-3-half" contenteditable="true">{{$menu->is_quanly==1?'Quản lý':'Nhân viên'}}</td>
                <td class="pt-3-half" contenteditable="true"></td>
                <td>
                    <span class="table-remove" ><button type="button" class="btn btn-success btn-rounded btn-sm my-0"> Thay đổi </button></span  >
                </td>

            </tr>
        @endforeach

          </tbody>
        </table>
        @foreach($menus as $key => $menu)
        @if($menu->is_quanly==1)
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
                Thông số quản lý dự án {{$menu->project->name}}
            </h3>
            <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2" ><a href="#!" class="text-success"></a ></span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                    <tr>
                        @for( $t=1;$t<=12;$t++)
                            <th >{{$t}}月</th>
                            @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @for( $t=1;$t<=12;$t++)
                        <td class="pt-3-half" contenteditable="true"></td>
                    @endfor
                </tr>
                </tbody>
                </table>
        </div>
      @endif
      @endforeach
    </div>
  </div>
  <!-- Editable table -->

   

@endsection
