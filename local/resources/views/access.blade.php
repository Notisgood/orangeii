@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">จัดการสิทธิ์</a>
            </li>
        </ul>

        <div class="text-right">

            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">จัดการสิทธิ์</button>
        </div>

    </div>
    <hr style="width: 95%;">

</div>
<div class="card-block">
    <div class="dt-responsive table-responsive">
        <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ชื่อ</th>
                    <th>username</th>
                    <th>การเข้าถึง</th>
                    <th>การเข้าถึง</th>
                    <th>การเข้าถึง</th>
                    <th>การเข้าถึง</th>
                    <th>การเข้าถึง</th>

                </tr>
            </thead>
            <tbody>
                @foreach($roles_all as $key => $r)
                <tr>
                    <td>{{  $key+1 }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->user_username }}</td>
                    <td>{{ $r->access_menu1 }}</td>
                    <td>{{ $r->access_menu2 }}</td>
                    <td>{{ $r->access_menu3 }}</td>
                    <td>{{ $r->access_menu4 }}</td>
                    <td>{{ $r->access_menu5 }}</td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">จัดการสิทธิ์</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('accessadd') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" required autocomplete="off" onchange="setdata()">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> ตำแหน่ง</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="role" name="role" required autocomplete="off" readonly>
                                    <input type="text" class="form-control" id="userid" name="userid" required autocomplete="off"  hidden>

                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">จัดการพนักงาน</label>
                            <div class="col-sm-10">
                                <select name="access_menu1" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <option value="Y">
                                       อนุญาติเข้าถึง
                                    </option>
                                    <option value="N">
                                       ไม่อนุญาติเข้าถึง
                                    </option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">จัดการสินค้า</label>
                            <div class="col-sm-10">
                                <select name="access_menu2" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <option value="Y">
                                       อนุญาติเข้าถึง
                                    </option>
                                    <option value="N">
                                       ไม่อนุญาติเข้าถึง
                                    </option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">การทำรายการ</label>
                            <div class="col-sm-10">
                                <select name="access_menu3" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <option value="Y">
                                       อนุญาติเข้าถึง
                                    </option>
                                    <option value="N">
                                       ไม่อนุญาติเข้าถึง
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">จัดการหมวดหมู่</label>
                            <div class="col-sm-10">
                                <select name="access_menu4" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <option value="Y">
                                       อนุญาติเข้าถึง
                                    </option>
                                    <option value="N">
                                       ไม่อนุญาติเข้าถึง
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ออกรายงาน</label>
                            <div class="col-sm-10">
                                <select name="access_menu5" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <option value="Y">
                                       อนุญาติเข้าถึง
                                    </option>
                                    <option value="N">
                                       ไม่อนุญาติเข้าถึง
                                    </option>
                                </select>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect col md-close" id="prooo">บันทึก</button>
                <button type="button" class="btn btn-default waves-effect col " data-dismiss="modal">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
function setdata(){
     var categories = $("#name").val();
     console.log(categories);
    $.ajax({
            url: "{{ route('getMember') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': categories
            },
            type: "POST",
            dataType: "JSON",
            async: false,
            success: function(data) {
                $("#role").val(data.member.roles_des);
                $("#userid").val(data.member.id);

                // $.each(jd, function(key, val) {
                //     $("#carl").val(val["product_detail"]);
                   
                // });
            }
        });
 }
</script>