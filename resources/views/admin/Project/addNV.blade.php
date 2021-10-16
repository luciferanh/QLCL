@extends('home')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <!-- using https://github.com/istvan-ujjmeszaros/bootstrap-duallistbox -->

    <!-- common libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- plugin -->
    <script src="https://www.virtuosoft.eu/code/bootstrap-duallistbox/bootstrap-duallistbox/v3.0.2/jquery.bootstrap-duallistbox.js"></script>

    <link rel="stylesheet" type="text/css" href="https://www.virtuosoft.eu/code/bootstrap-duallistbox/bootstrap-duallistbox/v3.0.2/bootstrap-duallistbox.css">

    <!-- Demo -->

        <div class="row" style="margin-top: 40px;">
            <div class="col">

                <h2> Thêm Nhân viên vào dự án {{$title}} </h2>

            </div>
        </div>
        <div class="row" style="margin-bottom: 40px;">
            <div class="col">
                <form method="post" action="" id="demoform">
                    <select multiple="multiple" size="10" name="duallistbox_demo1[]" title="duallistbox_demo1[]">
                        @foreach($nv_hien_co as $key => $nv)
                            <option value="{{$nv->id}}">{{$nv->name}}</option>
                        @endforeach
                        @foreach($nv_in_pj as $key => $nv)
                           <div class="form-group"><option value="{{$nv->nhanvien->id}}" selected="selected" >{{$nv->nhanvien->name}}</option></div>
                        @endforeach
                    </select>
                    <br>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <button type="submit" class="btn btn-primary w-100">Thêm Nhân Viên</button>
                        </div>
                    </div>
                    @csrf
                </form>

            </div>
        </div>

    <script>
        var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({
            nonSelectedListLabel: 'Nhân viên có thể làm việc',
            selectedListLabel: 'Nhân viên đã được chọn',
            preserveSelectionOnMove: 'moved',
            moveAllLabel: 'Move all',
            removeAllLabel: 'Remove all'
        });
        $("#demoform").submit(function() {

            alert($('Nhận : [name="duallistbox_demo1[]"]').val());
            return false;
        });
    </script>
@endsection
