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
<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$title}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputbophan_id">Tên nhân viên</label>
                        <select class="form-control" name="nv_id" id="nv_id">
                            @foreach($nhanvien as $key => $nhanvien)
                            @if($nhanvien->is_admin=='2')
                            <option value="{{$nhanvien->id}}">{{$nhanvien->name}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 1</label>
                    <input type="number" class="form-control" name="ngay1" id="ngay1" placeholder="Số Ngày Làm Tháng thứ 1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 2</label>
                    <input type="number" class="form-control" name="ngay2" id="ngay2" placeholder="Số Ngày Làm Tháng thứ 2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 3</label>
                    <input type="number" class="form-control" name="ngay3" id="ngay3" placeholder="Số Ngày Làm Tháng thứ 3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 4</label>
                    <input type="number" class="form-control" name="ngay4" id="ngay4" placeholder="Số Ngày Làm Tháng thứ 4">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 5</label>
                    <input type="number" class="form-control" name="ngay5" id="ngay5" placeholder="Số Ngày Làm Tháng thứ 5">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 6</label>
                    <input type="number" class="form-control" name="ngay6" id="ngay6" placeholder="Số Ngày Làm Tháng thứ 6">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 7</label>
                    <input type="number" class="form-control" name="ngay7" id="ngay7" placeholder="Số Ngày Làm Tháng thứ 7">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 8</label>
                    <input type="number" class="form-control" name="ngay8" id="ngay8" placeholder="Số Ngày Làm Tháng thứ 8">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 9</label>
                    <input type="number" class="form-control" name="ngay9" id="ngay9" placeholder="Số Ngày Làm Tháng thứ 9">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 10</label>
                    <input type="number" class="form-control" name="ngay10" id="ngay10" placeholder="Số Ngày Làm Tháng thứ 10">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 11</label>
                    <input type="number" class="form-control" name="ngay11" id="ngay11" placeholder="Số Ngày Làm Tháng thứ 11">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 12</label>
                    <input type="number" class="form-control" name="ngay12" id="ngay12" placeholder="Số Ngày Làm Tháng thứ 12">
                  </div>
               
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @csrf
              </form>
            </div>

            </div>



        </div>
@endsection
