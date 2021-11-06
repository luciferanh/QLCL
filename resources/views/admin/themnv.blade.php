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
                    <input name="name" type="name" placeholder="name"  pattern="[A-Za-z\s]{0,18}$" id="name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address<span style="color:red;"> (*)</span></label>
                    <input type="email" name="email" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password <span style="color:red;"></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" >Quyền hạn</label>
                      <select class="form-control" name="is_admin" id="is_admin">
                          <option value="2">Nhân Viên</option>
                          <option value="1">Admin</option>
                      </select>
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số điện thoại</label>
                        <input type="tel" name="sdt" class="form-control" id="sdt" placeholder="Enter sdt" pattern="[Z0-9 ]{10}" onkeypress="return /[0-9]/i.test(event.key)" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Chức vụ</label>
                        <select  name="chuc_vu" id="chuc_vu" class="form-control"  placeholder="Enter chuc vu" >
                        <option value="Quản lí">Quản lí</option>
                        <option value="Leader">Leader</option>
                        <option value="Nhân Viên">Nhân Viên</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ngày làm việc</label> <br/>
                        <input type="date" class="datepicker" name="date_start" id="date_start"  data-provide="datepicker" >
                     
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
