@extends('main')
@section('content')
<div class="page-header">

    {{-- <div class="col-sm-3">
            <label> ชื่อโกดัง</label>
                <input type="text" class="form-control" placeholder="Search here...">
    </div> --}}
    <div class="card">
        <div class="card-block">
            <div class="row col-12">
                <ul class="breadcrumb-title col-12">
                    <li class="breadcrumb-item" style="margin-top: 20px;">
                        <a href="index.html"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">รายละเอียดสินค้า</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12">
                    <form name="myfrom" method="post" action="{{route('update.product')}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$productlist->uid}}">

                        <div class="form-group row col-12">
                            <div class="col-sm-3">
                                <label> รหัสสินค้า</label>
                                <input type="text" class="form-control" name="product_barcode" maxlength="15"
                                    value="{{$productlist->product_barcode}}"  required autocomplete="off">
                            </div>
                            <div class="col-sm-3">
                                <label> รายละเอียดสินค้า</label>
                                <input type="text" class="form-control" name="product_detail"
                                    value="{{$productlist->product_detail}}" required autocomplete="off">
                            </div>
                            <div class="col-sm-3">
                                    <label> หมวดหมู่สินค้าน</label>
                                    <select name="product_class_no" class="form-control" required>
                                            <option value="">-- กรุณาเลือก --</option>
                                            @foreach ($productclass as $key => $r)
        
                                            <option {{$productlist->product_class_no == $r->class_uid ? 'selected' : '' }}
                                                value="{{$r->class_uid}}">
                                                {{$r->product_class_detail. '::' .$r->product_class_code}}
                                            </option>
        
        
                                            @endforeach
                                    </select>
                                </div>
                            <div class="col-sm-3">
                                <label> นับเป็น</label>
                                <select name="product_group" class="form-control" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    @foreach ($product_type as $key => $r)

                                    <option {{$productlist->product_group == $r->uid_product_type ? 'selected' : '' }}
                                        value="{{$r->uid_product_type}}">
                                        {{$r->product_code}}
                                    </option>


                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row col-12">
                                <div class="col-sm-3">
                                        <label> หน่วย</label>
                                        <input type="text" class="form-control" name="product_unit" maxlength="15"
                                            value="{{$productlist->product_unit}}" required autocomplete="off">
                                    </div>
                            <div class="col-sm-3">
                                <label> จำนวน</label>
                                <input type="text" class="form-control" name="product_amount" maxlength="11"
                                    value="{{$productlist->product_amount}}" id="product_amount" onkeyup="checkVlue('product_amount')" required autocomplete="off">
                            </div>
                            <div class="col-sm-3">
                                <label> รหัส บ/ช</label>
                                <input type="text" class="form-control" name="product_acc" maxlength="15"
                                    value="{{$productlist->product_acc}}" required autocomplete="off">
                            </div>
                            <div class="col-sm-3">
                                <label> ราคามาตราฐาน</label>
                                <input type="text" class="form-control" name="product_price" maxlength="11"
                                    value="{{$productlist->product_price}}" id="product_price" onkeyup="checkVlue('product_price')" required autocomplete="off">
                            </div>
                        </div>
                          <div class="form-group row col-12">
                                <div class="col-sm-12">
                                        <label> สินค้าทดแทน</label>
                                        <input type="text" class="form-control" name="product_replace"
                                            value="{{$productlist->product_replace}}" autocomplete="off" >
                                    </div>
                          </div>

                </div>
            </div>
        </div>
    </div>
    <hr style="width: 95%;">

</div>


<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="form-group">

            <button tpye="button" class="btn btn-primary btn-block" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success-cancel']);">ยืนยัน</button>
            
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <!-- Block level buttons with icon -->
        <div class="form-group">
            <a href="{{route('productlist')}}"><button class="btn btn-danger btn-block">กลับหน้าหลัก</button></a>

        </div>
    </div>
</div>

</form>

</div>
<div class="md-modal md-effect-5" id="modal-5">
    <div class="md-content">
        <h3>เพิ่มสินค้าตัวใหม่</h3>
        <div>
            <div class="card-block" id="contents">
                <form name="myfrom" method="post" action="{{ url('inProductType') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">แบรนด์ยางรถยนต์</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รุ่นยางรถยนต์</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ขนาดยาง</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">หน้ากว้างยาง (มม.)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">แก้มยางสูง (มม.)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">เส้นผ่านศูนย์กลางกระทะล้อ (นิ้ว)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ความสูงยางโดยรวม (มม.)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">LOT ยางรถยนต์</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">จำนวนนำเข้า</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ราคาต้นทุน</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ราคาขั้นต่ำระดับ 1</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">จำนวนที่จองได้ (สูงสุด) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ราคาขั้นต่ำระดับ 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">จำนวนที่จองได้ (สูงสุด) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ราคาขั้นต่ำระดับ 3</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">จำนวนที่จองได้ (สูงสุด) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ราคาขั้นต่ำระดับ 4</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">จำนวนที่จองได้ (สูงสุด) </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="">
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
</div>
<div class="md-overlay"></div>
@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>
{{-- <script>
function checkui(){
    var product_amount = $("#product_amount").val.length;
    console.log(product_amount);
    if (product_amount > 11) {
       
        alert("กรุณาใช้เลขไม่เกิน 11 หลัก");
        $("#product_amount").val("");
        
    }
}
</script> --}}
@endsection