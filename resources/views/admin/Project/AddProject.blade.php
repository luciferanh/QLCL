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
                  <div class="row">
                            <div class="col">
                              <label for="exampleInputEmail1">Name<span style="color:red;"> (*)</span></label>
                              <input name="name" type="name" placeholder="name" pattern="[a-zA\s]{0,15}" id="name" >
                            </div>
                              <div class="col">
                                  <label for="exampleInputbophan_id">Bộ phận</label>
                                  <select class="form-control" name="bophan_id" id="bophan_id" pattern="[a-z]{1,15} ">
                                      @foreach($bophans as $key => $bophan)
                                      <option value="{{$bophan->id}}">{{$bophan->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input class="form-control" name="description" id="description" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <input class="form-control" name="content" id="content" placeholder="Enter Content">
                  </div >
                          <div class="container1" >
                              <div class="item">
                                <label for="exampleInputEmail1">Ngày bắt đầu</label> <br/>
                                <input type="text" name="date_start"  id="date_start"  >
                              </div>
                              <div class="item1">
                                <label for="exampleInputEmail1">Ngày kết thúc</label> <br/>
                                <input type="text" name="date_end"  id="date_end"  >
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
        <!-- /.row -->

@endsection
