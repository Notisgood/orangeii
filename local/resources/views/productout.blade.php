@extends('main')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}">


<style>
    .fontcolorblue{
        color: blue;
    }
    .slide-up
    {
        bottom: 0px !important;
    }
    .slide-down
    {
        bottom: -475px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        /* background-color: #a5a2a2; */
        /* color: #fff; */
        padding: 8px 30px 8px 20px;
        line-height: 17px;
    }
    .djun{
        color:red;
        font-size:18px;
    }
    .djun2{
        color:red;
        font-size:14px;       
    }

    /* select2 In Modal set Css */
    .select2-container--open{
        z-index:20000;         
    }
    .modal{
        z-index:8888 !important;
    }

    .div_r{
        text-align:right;
    }
    .div_l{
        text-align:left;
        
    }
    .div_ao{
            padding-left:0px;          
        }
    @media (max-width: 575px) {
        .div_r{
            text-align:left;          
        }
        .div_ao{
            padding-left:15px;          
        }
    }   
</style>
@endsection
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title" >
            <li class="breadcrumb-item" style="margin-top: 20px;">
            <a href="{{route('productlist')}}"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">นำสินค้าออก</a>
            </li>
        </ul>

        <div class="text-right">
           {{-- <button type="button" class="btn btn-primary waves-effect md-trigger" 
           data-modal="modal-5">นำสินค้าออก</button> --}}
           {{-- <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
           data-target="#large-Modal">นำสินค้าออก</button> --}}
        </div>

    </div>
    <hr style="width: 95%; margin-top: 50px;">

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
                            
                        </div>
                        <label class="col-sm-2 col-form-label text-center">LOT</label>
                        <div class="col-sm-4">
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
                        <label class="col-sm-2 col-form-label text-center">นำออกโดย</label>
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
<div class="card-block">
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

                </tr>
            </thead>
            <tbody id="proinn">
                    {{-- @foreach($productOutList as $key => $r)
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
            
        </table>
    </div>
</div>
<div class="md-overlay"></div>
{{-- <div class="modal fade" id="large-Modal"  role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">นำสินค้าออก</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-block">
                    <form name="myfrom" method="post" id="proin" action="{{ url('inProductOut') }}">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">รหัสสินค้า</label>
                                    <div class="col-sm-10">
                                        <select name="product_uid" id="categories" onchange="setdata()" class="js-example-basic-single form-control" >
                                            
                                            <option value="">เลือกประเภทสินค้า</option>
                                                @foreach($productt as $types)
                                                <option value="{{ $types->uid}}">
                                                        {{ $types->product_barcode.' :: '.$types->product_detail }}
                                                </option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">รายละเอียดสินค้า</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="detail" name="product_detail" readonly autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">LOT </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lot" name="product_log_detail"  autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">จำนวน</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_log_amount" 
                                    id="product_log_amount" onkeyup="checkVlue('product_log_amount')" required autocomplete="off" maxlength="11">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">นำเข้าโดย</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_log_by" required autocomplete="off">
                                </div>
                            </div>
                            
                    </div>
                </div>
                <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect col md-close">บันทึก</button>
    
                    <button type="button" class="btn btn-default waves-effect col " data-dismiss="modal" >ยกเลิก</button>
                </div>
                </form>
            </div>
        </div>
</div> --}}
@endsection
@section('scripts')
<script src="{{asset('/files/myscript.js')}}"></script>
 <!-- Custom js -->
 <script  src="{{asset('/files/bower_components/select2/js/select2.full.min.js')}}"></script>
 <script src="{{asset('/files/assets/pages/advance-elements/select2-custom.js')}}"></script>
<!-- Multiselect js -->
 <script src="{{asset('/files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
 <script src="{{asset('/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
 <script src="{{asset('/files/assets/js/jquery.quicksearch.js')}}"></script>

 <script>

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
    console.log(uid);
    console.log(detail);
    console.log(lot);
    console.log(amount);
    console.log(by);
   
    $.ajax({
            url: "{{ route('inProductOut') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'id': uid,
                'detail' : detail,
                'lot' : lot,
                'amount' : amount,
                'by' : by,
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
//  function change_categories(categories) {  
//         if(categories == '1' || categories == '2'){
//             var formData = new FormData();
//             formData.append('categories', categories);
//             formData.append('_token', '{{ csrf_token()}}');
//             $.ajaxSetup({ async: false });
//             $.ajax({
//                 url: '{{url('/')}}/json_change_categories_sub1',
//                 type: 'POST',
//                 data: formData ,
//                 enctype: 'multipart/form-data',
//                 async: true,
//                 // timeout: 8000,
//                 cache: false,
//                 contentType: false,
//                 processData: false,
//                 beforeSend: function (xhr, setting) {
//                     //$("#load").modal('show');
//                 },
//                 error: function (xhr, status, error) {
//                     //console.log(error);
//                 },
//                 success: function (data) 
//                 {
//                     $('#categories_sub1_fk').empty();
//                     $sub1   = '';
//                     $sub1 +=  '<option value="">หมวดหมู่ชั้น 1</option>';                       
//                     for($i = 0; $i < data.length; $i++ )
//                     {
//                         var id_health           = data[$i]['categories_sub1_id'];
//                         var title_cover_health  = data[$i]['categories_sub1_name'];
//                         var cate_code1          = data[$i]['cate_code1'];                           
//                         $sub1 +='<option value="'+ id_health +'">'+ cate_code1 +' :: '+title_cover_health +'</option>';
//                     }
//                     $('#categories_sub1_fk').append($sub1);                               
//                 }
//             });
//        }else{
//             $('#categories').empty();
//             $sub0   = '';
//             $sub0 +=  '<option value="0">เลือก</option>';    
//             $sub0 +=  '<option value="1">Collection</option>';   
//             $sub0 +=  '<option value="2">Part</option>';   
//             $('#categories').append($sub0);   
        
//             $('#categories_sub1_fk').empty();
//             $sub1   = '';
//             $sub1 +=  '<option value="0">-</option>';    
//             $('#categories_sub1_fk').append($sub1); 
//        }

//     }
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