@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">ข้อมูลสินค้า</a>
            </li>
        </ul>

        <div class="text-right">
            {{-- <button type="button" class="btn btn-primary waves-effect md-trigger"
                data-modal="modal-5">เพิ่มสินค้าใหม่</button> --}}
            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มสินค้าใหม่</button>

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
                    <th>รหัสสินค้า</th>
                    <th>หมวดหมู่สินค้า</th>
                    <th>รายละเอียด</th>
                    <th>หน่วย</th>
                    <th>นับเป็น</th>
                    <th>จำนวน</th>
                    <th>รหัส บ/ช</th>
                    <th>ราคามาตราฐาน</th>
                    <th>สินค้าทดแทน</th>
                    <th>edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productlist as $key => $r)

                    {{-- <tr style="background-color:#{{ $r->ifmin}}"> --}}
                    <td>{{ $key+1 }}</td>
                    <td>{{ $r->product_barcode }}</td>
                    <td>{{ $r->product_class_detail }}</td>
                    <td>{{ $r->product_detail }}</td>
                    <td>{{ $r->product_unit }}</td>
                    <td>{{ $r->product_code }}</td>
                    <td>{{ $r->product_amount }}</td>
                    <td>{{ $r->product_acc }}</td>
                    <td>{{ $r->product_price }}</td>
                    <td>{{ $r->product_replace }}</td>

                    <td class=" icon-btn">

                        <div>
                            <a href="{{url('productedit/'.$r->uid)}}" class="btn btn-secondary btn-sm ">View  <i
                                    class="icofont icofont-eye-alt"></i></a>
                            <a href="{{url('productedit/'.$r->uid)}}" class="btn btn-primary btn-sm ">Edit <i
                                    class=" fa fa-pencil"></i></a>

                        </div>

                    </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
{{-- <div class="md-modal md-effect-5 modal-lg" id="modal-5">
    <div class="md-content">
        <h3>เพิ่มสินค้าใหม่</h3>
        <div>
            <div class="card-block" id="contents">
                <form name="myfrom" method="post" action="{{ url('inRegister') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รหัสสินค้า</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_barcode"
                                onkeyup="check_formet(this,'')" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รายละเอียด</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_detail" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">หน่วย</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_unit" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">

                        <label class="col-sm-2 col-form-label"> นับเป็น</label>
                        <div class="col-sm-10">
                            <select name="product_group" class="form-control" required>
                                <option value="">-- กรุณาเลือก --</option>
                                @foreach ($producttype as $key => $r)

                                <option value="{{$r->uid_product_type}}">
                                    {{$r->product_code}}
                                </option>


                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รหัส บ/ช</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_acc" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ราคามาตราฐาน</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_price"
                                onkeyup="checkVlue('product_price')" required autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">สินค้าทดแทน</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_replace" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary waves-effect md-close"
                                style="margin-left: 0px;">บันทึก</button>

                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div> --}}
<div class="md-overlay"></div>
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มสินค้าใหม่</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block" id="contents">
                    <form name="myfrom" method="post" action="{{ url('inRegister') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">รหัสสินค้า</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_barcode"
                                    onkeyup="check_formet(this,'')" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">รายละเอียด</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_detail" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">หน่วย</label>
                            <div class="col-sm-10">
                                <select name="product_unit" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <option value="ย่อย">ย่อย
                                    </option>
                                </select>                            
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> นับเป็น</label>
                            <div class="col-sm-10">
                                <select name="product_group" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    @foreach ($producttype as $key => $r)
                                    <option value="{{$r->uid_product_type}}">
                                        {{$r->product_code}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label class="col-sm-2 col-form-label"> หมวดหมู่สินค้า</label>
                                <div class="col-sm-10">
                                    <select name="product_class_no" class="form-control" required>
                                        <option value="">-- กรุณาเลือก --</option>
                                        @foreach ($productclass as $key => $r)
                                        <option value="{{$r->class_uid}}">
                                            {{$r->product_class_detail. '::' .$r->product_class_code}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">รหัส บ/ช</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_acc" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ราคามาตราฐาน</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_price" id="product_price" maxlength="11"
                                    onkeyup="checkVlue('product_price')" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">สินค้าทดแทน</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_replace" autocomplete="off">
                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary waves-effect col "
                    >ยืนยัน</button>
                <button type="button" class="btn btn-default waves-effect col " data-dismiss="modal">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection
<script src="{{asset('/files/myscript.js')}}"></script>