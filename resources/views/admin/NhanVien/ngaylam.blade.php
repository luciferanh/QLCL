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


<!-- Content Wrapper. Contains page content -->

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
                    <label for="exampleInputEmail1">Năm</label>
                    <input type="number" class="form-control" name="nam" id="nam" placeholder="Năm " >
                  </div>
                  <div class="container1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tháng 1</label>
                    <input type="number" class="form-control" name="T1" id="T1" placeholder="Số Ngày">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 2</label>
                    <input type="number" class="form-control" name="T2" id="T2" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 3</label>
                    <input type="number" class="form-control" name="T3" id="T3" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 4</label>
                    <input type="number" class="form-control" name="T4" id="T4" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 5</label>
                    <input type="number" class="form-control" name="T5" id="T5" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 6</label>
                    <input type="number" class="form-control" name="T6" id="T6" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 7</label>
                    <input type="number" class="form-control" name="T7" id="T7" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 8</label>
                    <input type="number" class="form-control" name="T8" id="T8" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 9</label>
                    <input type="number" class="form-control" name="T9" id="T9" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 10</label>
                    <input type="number" class="form-control" name="T10" id="T10" placeholder="Số Ngày">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 11</label>
                    <input type="number" class="form-control" name="T11" id="T1" placeholder="Số Ngày ">
                  </div>
                  <div class="item1">
                    <label for="exampleInputEmail1">Tháng 12</label>
                    <input type="number" class="form-control" name="T12" id="T12" placeholder="Số Ngày">
                  </div>
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
