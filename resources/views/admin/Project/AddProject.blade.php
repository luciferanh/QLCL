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
                    <label for="exampleInputEmail1">Name</label>
                    <input class="form-control" name="name" id="name" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input class="form-control" name="description" id="description" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <input class="form-control" name="content" id="content" placeholder="Enter Content">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày bắt đầu</label> <br/>
                    <input class="datepicker" name="date_start" id="date_start" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày kết thúc</label> <br/>
                    <input class="datepicker" name="date_end" id="date_end" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" >
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

  <!-- Control Sidebar -->
@endsection
