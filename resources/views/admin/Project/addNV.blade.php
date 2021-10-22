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
                    <select  class="form-control" multiple="multiple" size="10" name="duallistbox_demo1[]" title="duallistbox_demo1[]"  id="framework">
                        @foreach($nv_hien_co as $key => $nv)
                            @php $is_has = 0@endphp
                            @foreach($nv_in_pj as $key => $nvpj)
                                @if($nvpj->nhanvien->id==$nv->id)
                                    @php $is_has = 1@endphp
                                @endif
                            @endforeach
                            @if($is_has ==0)
                                <option value="{{$nv->id}}">{{$nv->name}}</option>
                            @endif

                        @endforeach
                        @foreach($nv_in_pj as $key => $nv)
                                <option value="{{$nv->nhanvien->id}}" selected="selected" >
                                    {{$nv->nhanvien->name}}
                                   </option>

                        @endforeach
                    </select>

                    <br>
                    <div class="form-group">
                        <label for="exampleInputbophan_id">Chọn leader</label>
                        <select class="form-control" name="leader_id" id="leader_id"  >

                        </select>
                    </div>
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
        $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({
            nonSelectedListLabel: 'Nhân viên có thể làm việc',
            selectedListLabel: 'Nhân viên đã được chọn',
            preserveSelectionOnMove: 'moved',
            moveAllLabel: 'Move all',
            removeAllLabel: 'Remove all'
        });

    </script>
    <script>

        $('select[name="duallistbox_demo1[]"]').change(function(){

            var selected = $('select[name="duallistbox_demo1[]"]').val();
            console.log(selected);
            var users = @json($nv_hien_co).data;
            var name_user={};
            for(key in users){
                const isInArray = selected.includes(users[key]['id'].toString());

                if(isInArray){

                    name_user[users[key]['id']] = users[key]['name'];
                }
            }
            $('#leader_id option').each(function() {

                    $(this).remove();

            });
            $.each(name_user, function(key, value) {
                $('#leader_id')
                    .append($("<option></option>")
                        .attr("value", key)
                        .text(value));

            });
        });

    </script>
@endsection
