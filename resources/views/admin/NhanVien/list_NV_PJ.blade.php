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
        @foreach($nvs as $key => $menu)
            <tr>
                <th>{{$menu->nhanvien->name}}</th>
                <th>{{$menu->project->name}}</th>
                @if( $menu->nang_suat ==0)
                <th>100%</th>
                @endif
                @if( $menu->nang_suat !=0)
                <th>{{ $menu->nang_suat }}%</th>
                @endif
                @foreach($ngaylamviec as $key => $ngay)

                        @if( date('m',strtotime($menu->nhanvien->date_start))>$ngay->thang)
                            <th></th>
                        @endif
                        @if( date('m',strtotime($menu->nhanvien->date_start))<=$ngay->thang)
                                @foreach($nss as $key => $ns)
                                    @if($t-date('m',strtotime($menu->nhanvien->date_start))+1==$ns->thang)
                                    @if( $menu->nang_suat ==0)
                                    <th>{{$ns->nangsuat}}({{ $ngay->ngay }})</th>
                                    @endif
                                    @if( $menu->nang_suat !=0)
                                    <th>{{$ns->nangsuat}}({{ $ngay->ngay * $menu->nang_suat/100}})</th>
                                    @endif
                                     
                                    @endif
                                @endforeach
                        @endif

                 @endforeach

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">    {!!$nvs->links()!!}</div>
    <div class="card-footer clearfix">    {!!$nss->links()!!}</div>
@endsection
