@extends('main')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">

@endsection
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">ออกรายงานรายวัน</a>
            </li>
        </ul>

    </div>
    <div class="card-block"> 
            <hr style="width: 95%;" style="margin-top: 20px;">
    </div>    
    <div class="card-block">
            <div class="row">
                <div class="col-12">
                    {{-- <form  name="myfrom" method="post" action="{{ route('productfindday')}}"> --}}
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-3">
                                    <label> วันที่เริ่ม</label>
                                    <input class="form-control" type="date" id="start" name="datestart"/>
                                </div>
                            <div class="col-sm-3">
                                <label> วันที่สิ้นสุด</label>
                                <input class="form-control" type="date" id="end" name="dateend"/>
                            </div>
                            <div class="col-sm-3">
                                <label> รายการ</label>
                                <select name="statuspro" id="stat" class="form-control">
                                        <option value="">-- กรุณาเลือก --</option>
                                        {{-- <option value="">-- ทั้งหมด --</option> --}}
                                        @foreach ($productstat as $key => $r)
                                        <option value="{{$r->product_status_id}}">
                                            {{$r->product_status_detail. '::' .$r->product_status_code}}
                                        </option>
                                        @endforeach
                                </select>
                        <div class="col">
                            <label></label>
                            <button class="btn btn-primary btn-block" style="margin-top: 7px;" onclick="searchdata()">Search</button>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
    </div>
          

</div>
<div class="card-block">
        <div class="dt-responsive table-responsive">
                <table id="basic-btn" class="table table-striped table-bordered nowrap">
                        <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                       
                            </div>
                            
                                   <th>LOT</th>
                                    <th>รายการสินค้า</th>
                                    <th>สถานะสินค้า</th>
                                    <th>จำนวน</th>
                                    <th>วันที่</th>
                                    <th>โดย</th>
                
                                </tr>
                            </thead>
                            <tbody id="proinn">
                                    {{-- @foreach($productDailyList as $key => $r)
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
@endsection
@section('scripts')
<script src="{{asset('/files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('/files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('/files/assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
<script src="{{asset('/files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
<script src="{{asset('/files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('/files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js')}}"></script>

<script>
var i = 0;
function searchdata(){
    var start = $("#start").val();
    var end = $("#end").val();
    var stat = $("#stat").val();
    console.log(start);
    console.log(end);
    console.log(stat);
    
   
    $.ajax({
            url: "{{ route('productfindday') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                'datestart': start,
                'dateend' : end,
                'statuspro' : stat,
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
                proinn +=  '<td>'+data.member.product_barcode+'</td>';
                proinn +=  '<td>'+data.member.product_status_detail+'</td>';
                proinn +=  '<td>'+data.member.product_log_amount+'</td>';
                proinn +=  '<td>'+data.member.product_log_date+'</td>';
                proinn +=  '<td>'+data.member.product_log_by+'</td>';
                proinn +=  '</tr> ';
                
                $('#proinn').append(proinn);
            }
        });
 }
 </script>
@endsection