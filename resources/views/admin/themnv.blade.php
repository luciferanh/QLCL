@extends('home')

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
                    <label for="exampleInputEmail1">Name<span style="color:red;"> (*)</span></label>
                    <input name="name" type="name" placeholder="name" pattern="[a-zA\s]{1,15}" id="name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address<span style="color:red;"> (*)</span></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password <span style="color:red;"></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Quyền hạn</label>
                      <select class="form-control" name="is_admin" id="is_admin">
                          <option value="2">Nhân Viên</option>
                          <option value="1">Admin</option>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số điện thoại</label>
                        <input type="tel" name="sdt" class="form-control" id="sdt" placeholder="Enter sdt" pattern="[Z0-9 ]{10}" onkeypress="return /[0-9]/i.test(event.key)">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chức vụ</label>
                        <input name="chuc_vu" class="form-control" id="chuc_vu" placeholder="Enter chuc vu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày làm việc</label> <br/>
                        <input class="datepicker" name="date_start" id="date_start" data-provide="datepicker" >
                     
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
        <!-- /.row -->
  <!-- /.content-wrapper -->
  <script>

   </script>
  <!-- Control Sidebar -->
@endsection
