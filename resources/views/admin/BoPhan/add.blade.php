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
                            <label for="exampleInputEmail1">Tên bộ phận</label>
                            <input class="form-control" name="name" id="name" placeholder="Enter name">
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
