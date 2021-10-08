@extends('home')


@section('content')
    <table >
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
                <th>{{$menu->name}}</th>
                <th>{{$menu->email}}</th>
                <th>{!!  \App\Helpers\Helper::active($menu->is_admin)!!}</th>
                <th>
                    <a class="btn btn-primary btn-sm" href="/admin/edit/{{$menu->id}}"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-danger btn-sm" href="#"
                       onclick="removeRow({{$menu->id}},'/admin/destroy')"> <i class="fas fa-trash"></i></a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card-footer clearfix">    {!!$menus->links()!!}</div>
@endsection
