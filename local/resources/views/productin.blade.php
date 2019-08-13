@extends('main')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}">


<style type="text/css">
    .fontcolorblue {
        color: blue;
    }

    .slide-up {
        bottom: 0px !important;
    }

    .slide-down {
        bottom: -475px !important;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        /* background-color: #a5a2a2; */
        /* color: #fff; */
        padding: 8px 30px 8px 20px;
        line-height: 17px;
    }

    .djun {
        color: red;
        font-size: 18px;
    }

    .djun2 {
        color: red;
        font-size: 14px;
    }

    /* select2 In Modal set Css */
    .select2-container--open {
        z-index: 20000;
    }

    .modal {
        z-index: 8888 !important;
    }

    .div_r {
        text-align: right;
    }

    .div_l {
        text-align: left;

    }

    .div_ao {
        padding-left: 0px;
    }

    @media (max-width: 575px) {
        .div_r {
            text-align: left;
        }

        .div_ao {
            padding-left: 15px;
        }
    }
</style>

@endsection
@section('content')
<div class="page-header">
    <div class="card-block">

            <ul class="breadcrumb-title col-12" >
                    <li class="breadcrumb-item" style="margin-top: 20px;">
                        <a href="#!"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">นำสินค้าเข้า</a>
                    </li>
        
            </ul>

    </div>
    <div class="card-block"> 
            <hr style="width: 95%;" style="margin-top: 20%;">
    </div>              
    <div class="card-block">
        <div class="row" >
        <div class="col-12" >
            
                {{-- <form name="myfrom" method="post" id="proin" action="{{ url('inProductIn') }}"> --}}
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รหัสสินค้า</label>
                        <div class="col-sm-4">
                                {{-- onchange="setdata()" --}}
                            <input name="" id="barcode"  onkeypress="appendData(this)"   
                        class="form-control" autocomplete="off" required> 
                            <input name="product_uid" id="uid" onchange="setdata()"
                        class="form-control" autocomplete="off" hidden> 
                                
                                {{-- select2 ajax query --}}
                                {{-- <option value="">เลือกประเภทสินค้า</option>
                                @foreach($productt as $types)
                                <option value="{{ $types->uid }}">
                                    {{ $types->product_barcode.' :: '.$types->product_detail }}
                                </option>
                                @endforeach --}}
                                <input type="text" name="logexp" id="logexp" 
                                class="form-control" autocomplete="off" hidden> 
                            
                        </div>
                        <label class="col-sm-2 col-form-label text-center">LOT</label>
                        <div class="col-sm-4">
                                <?php 
                                $test = "40-BACO-000122219B0001";
                                  DNS1D::getBarcodeSVG($test, "C128");
                                 ?>
                            <input type="text" class="form-control" id="lot" name="product_log_detail" 
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">รายละเอียดสินค้า</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="detail" name="product_detail" readonly
                                autocomplete="off">
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">จำนวน</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="product_log_amount" id="product_log_amount"
                                 required autocomplete="off" maxlength="11">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="code" name="code" readonly
                            autocomplete="off">
                        </div>
                        <label class="col-sm-2 col-form-label text-center">นำเข้าโดย</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="product_log_by" id="by"required autocomplete="off" value="{{Auth::user()->name}}" readonly>

                        </div>
                    </div>
                    
                    <div class="col-12 ">
                        <button type="submit" class="btn btn-primary waves-effect col md-close " onclick="insertdata()">บันทึก</button>

                    </div>
                {{-- </form> --}}

            </div>
        </div>

    </div>



</div>
<div class="card-block table-border-style">
    <div class=" table-responsive">
        <table class="table table-styling">
            <thead>
                <tr class="table-primary">
                    <th>ลำดับ</th>
                    <th>LOT</th>
                    <th>รายการสินค้า</th>
                    <th>สถานะสินค้า</th>
                    <th>จำนวน</th>
                    <th>วันที่</th>
                    <th>โดย</th>
                    <th>ปริ้น</th>

                </tr>
            </thead>
            <tbody id="proinn">

                {{-- @foreach($productInList as $key => $r)
                <tr>
                    <td>{{  $key+1 }}</td>
                    <td>{{ $r->product_log_detail }}</td>
                    <td>{{ $r->product_barcode }}</td>
                    <td>{{ $r->product_status_detail }}</td>
                    <td>{{ $r->product_log_amount }}</td>
                    <td>{{ $r->product_log_date }}</td>
                    <td>{{ $r->product_log_by }}</td>


                </tr>
                @endforeach --}}
            </tbody>
            {{-- <tfoot>
                <tr>
                <th>ลำดับ</th>
                <th>LOT</th>
                <th>รายการสินค้า</th>
                <th>สถานะสินค้า</th>
                <th>จำนวน</th>
                <th>วันที่</th>
                <th>โดย</th>

                </tr>
            </tfoot> --}}
        </table>
    </div>
</div>


<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ปริ้น barcode</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" id="proin" action="{{url('printpdf')}}" target="_blank">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Barcode</label>
                            <div class="col-sm-10">
                                    <input type="text" class="form-control" id="baco" name="baco" readonly
                                    autocomplete="off">
                                    <input type="hidden" class="form-control" id="id" name="id" readonly
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">รายละเอียดสินค้า</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="detaile" name="detaile" readonly
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">LOT</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="loto" name="loto" readonly
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">จำนวนแถวสติ๊กเกอร์</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sticknum"
                                    id="sticknum"  required
                                    autocomplete="off" maxlength="11">
                            </div>
                        </div>
                        
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect col md-close">ปริ้น</button> 

                <button type="button" class="btn btn-default waves-effect col " data-dismiss="modal">กลับ</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>

<!-- Multiselect js -->
<script src="{{asset('/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
<script src="{{asset('/files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('/files/assets/js/jquery.quicksearch.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('/files/bower_components/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('/files/assets/pages/advance-elements/select2-custom.js')}}"></script>
<script>
    //     $( document ).ready(function() {
//     $("#proin").on('submit', function(e) {
    
//         e.preventDefault(); 
    
//         var formData = new FormData(this); 
        
//         $.ajax({ 
                
//                 url:"{{ url('inProductIn') }}",
//                 data:formData,
//                 type:"POST",
//                 async: false,
//                 contentType: false,
//                 processData: false,
//                 success:function(data){ 

                  
//                     swal({
//                     title: "ทำการแก้ไขข้อมูลเรียบร้อยแล้ว",
//                     text: "",
//                     icon: "success",
//                     button: "ยืนยัน",
//                     }).then((value) => {
//                     window.location.reload();
//                 });


//                 },
//                 error:function(){
//                     alert('error');
//                 }
                
//             });
                    

//     });
// });

$(document).ready(function(){
  document.getElementById("barcode").focus();
    });

 function setdata(){
     var categories = $("#barcode").val();
     console.log(categories);
    $.ajax({
            url: "{{ route('getProduct') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': categories
            },
            type: "POST",
            dataType: "JSON",
            async: false,
            success: function(data) {
                $("#uid").val(data.member.uid);
                $("#detail").val(data.member.product_detail);
                $("#logexp").val(data.member.product_exp);
                $("#code").val(data.member.product_code);
                var mystr = data.member.product_barcode;
                var myarr = mystr.split("-");
                var myvar = myarr[1] + ":" + myarr[2];
                var res = myvar.substring(0, 1);
                var year = (new Date().getFullYear().toString().substr(-2));
                $('#lot').val(data.lot.lot_code+year+res+myarr[2]);
                // $.each(jd, function(key, val) {
                //     $("#carl").val(val["product_detail"]);
                   
                // });
            }
        });
 }
 var i = 0;
 function insertdata(){
    var uid = $("#uid").val();
    var detail = $("#detail").val();
    var lot = $("#lot").val();
    var amount = $("#product_log_amount").val();
    var by = $("#by").val();
    var barcode = $("#barcode").val();
    var logexp = $("#logexp").val();

    console.log(uid);
    console.log(detail);
    console.log(lot);
    console.log(amount);
    console.log(by);
   
    $.ajax({
            url: "{{ route('inProductIn') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': uid,
                'detail' : detail,
                'lot' : lot,
                'amount' : amount,
                'by' : by,
                'barcodelot' : barcode,
                'logexp' : logexp,
            },
            type: "POST",
            dataType: "JSON",
            async: false,
            success: function(data) 
            {
               
            i++;
            var proinn =  '<tr> ';
                proinn +=  '<td>'+i+'</td>';
                proinn +=  '<td>'+data.member.product_log_detail+'</td>';
                proinn +=  '<td>'+data.member.product_detail+'</td>';
                proinn +=  '<td>'+data.member.product_status_id+'</td>';
                proinn +=  '<td>'+data.member.product_log_amount+'</td>';
                proinn +=  '<td>'+data.member.product_log_date+'</td>';
                proinn +=  '<td>'+data.member.product_log_by+'</td>';
                proinn +=  '<td class=" icon-btn"><div onclick="print('+data.member.product_log_id+',\''+ data.member.product_detail + '\',\''+ data.member.lot_barcode + '\',\''+ data.member.product_log_detail + '\')" > View  <i class="icofont icofont-eye-alt"></i></div></td>';
                proinn +=  '</tr> ';
                
                $('#proinn').append(proinn);
                $("#uid").val('');
                $("#detail").val('');
                $("#lot").val('');
                $("#product_log_amount").val('');
                document.getElementById("barcode").value = "";
                document.getElementById("barcode").focus();
            }
        });
 }

 function print(id,detail,baco,lot){
    $('#id').val(id);
    $("#detaile").val(detail);
    $("#baco").val(baco);
    $('#loto').val(lot);
    console.log(detail,baco,lot);
    $('#large-Modal').modal('show');
 }

 
</script>
       
<script type="text/javascript">   
        $(document).on("keypress" , function(e){
            if(e.which == 13){
                document.getElementById("product_log_amount").value = "";
                document.getElementById("product_log_amount").focus();
                setdata();
            }
        });
     
        // function deleterow(id){
        //     $('#tableproduct'+id).remove();
        // }
        // $(function(){
        //     $(".noenter").keypress(function(event){
        //         if(event.keyCode==13){
        //            return false;
        //         }
        //     });
        // });	
        
</script>
@endsection