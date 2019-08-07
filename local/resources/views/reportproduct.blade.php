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
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">ออกรายงานสินค้า</a>
            </li>
        </ul>

    </div>
    <div class="card-block"> 
            <hr style="width: 95%;" style="margin-top: 20px;">
    </div>    
    <div class="card-block">
            <div class="row">
                <div class="col-12">
                {{-- <form  name="myfrom" method="get" action="{{ route('productfind')}}"> --}}
                            {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-sm-3">
                                    <label> วันที่</label>
                                    <input class="form-control" type="date" name="datestart" id="datestart"/>
                                </div>
                            <div class="col-sm-3">
                                <label> วันที่</label>
                                <input class="form-control" type="date" name="dateend" id="dateend" />
                            </div>
                            <div class="col-sm-3">
                                    <label> รายการ</label>
                                    <select name="statuspro" id="statuspro" class="form-control">
                                            <option value="">-- กรุณาเลือก --</option>
                                            <option value=""> เลือกทั้งหมด </option>
                                            {{-- <option value="">-- ทั้งหมด --</option> --}}
                                            @foreach ($productstat as $key => $r)
                                            <option value="{{$r->product_status_id}}">
                                                {{$r->product_status_detail. '::' .$r->product_status_code}}
                                            </option>
                                            @endforeach
                                    </select>
                            </div>
                            <div class="col-sm-3">
                                    <label> สินค้า</label>
                                    <select name="classno" id="classno" class="form-control" >
                                            <option value="">-- กรุณาเลือก --</option>
                                            @foreach ($productclass as $key => $r)
                                            <option value="{{$r->class_uid}}">
                                                {{$r->product_class_detail. '::' .$r->product_class_code}}
                                            </option>
                                            @endforeach
                                        </select>
                            </div>
                            <div class="col">
                                <label></label>
                                <button class="btn btn-primary btn-block" style="margin-top: 7px;" id="searchdata">Search</button>
                            </div>
                    </div>
                   
                    {{-- </form> --}}
                </div>
            </div>
    </div>
          

</div>
<div class="card-block">
    <div class="dt-responsive table-responsive">
        <table class="table table-striped table-bordered nowrap" id="datatables" >
                        <thead>
                                <tr>
                                    {{-- <th>ลำดับ</th> --}}
                                    <th>LOT</th>
                                    <th>รายการสินค้า</th>
                                    <th>สถานะสินค้า</th>
                                    <th>จำนวน</th>
                                    <th>วันที่</th>
                                    <th>โดย</th>
                
                                </tr>
                            </thead>
                            {{-- <tbody>
                                    @foreach($productDailyList as $key => $r)
                                <tr>
                                    <td>{{  $key+1 }}</td>
                                    <td>{{ $r->product_log_detail }}</td>
                                    <td>{{ $r->product_barcode }}</td>
                                    <td>{{ $r->product_status_detail }}</td>
                                    <td>{{ $r->product_log_amount }}</td>
                                    <td>{{ $r->product_log_date }}</td>
                                    <td>{{ $r->product_log_by }}</td>
                
                                </tr>
                                @endforeach
            </tbody> --}}
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

<script type="text/javascript">
	$(document).ready(function(){		
		
		// function format ( d ) {
		// 	return '<table>'+
        //     '<td>'+i+++'</td>'
        //     +'</table>';
		// }
		
		var oTable = $('#datatables').DataTable({
			processing: true,
			serverSide: true,
			searching: false,
			lengthChange: true,
	
			ajax:{ 
				url : "{{url('datatable_productfind')}}",  // my url route
				data: function (d) {
                    d.datestart = $('#datestart').val();
					d.dateend = $('#dateend').val();
					d.statuspro = $('#statuspro').val();
                    d.classno = $('#classno').val();
                    
				},				
			},
			
			columns: [
                // {
                //     "orderable":      false,
				// 	"data":           null,
				// 	"defaultContent": '1'
				// },
				{ data: 'product_log_detail', name: 'product_log_detail' },				
				{ data: 'product_barcode', name: 'product_barcode' },
				{ data: 'product_status_detail', name: 'product_status_detail' },
				{ data: 'product_log_amount', name: 'product_log_amount' },
				{ data: 'product_log_date', name: 'product_log_date' },
				{ data: 'product_log_by', name: 'product_log_by' },

			],
			order: [[1, 'desc']],
			rowCallback: function(row,data,index ){
				var url = "{{url('datatable_productfind')}}"+"/"+data['product_log_id'];
            
			}
		});
	
		// searchdata
		$('#searchdata').click(function(e){
			oTable.draw();
			e.preventDefault();
		});		
		
	});
</script>
@endsection