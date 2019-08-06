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
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">ออกรายงานรายคน</a>
            </li>
        </ul>

    </div>
    <div class="card-block"> 
            <hr style="width: 95%;" style="margin-top: 20px;">
    </div>    
    <div class="card-block">
            <form  name="myfrom" method="get" action="{{ route('productsearch') }}">
                    {{ csrf_field() }}
            <div class="row seacrh-header">
                    <div class="col-lg-6 offset-lg-3 offset-sm-3 col-sm-6 offset-sm-1 col-xs-12">
                        <div class="input-group input-group-button input-group-primary">
                            <input type="text" name="statuspro" class="form-control" placeholder="กรอกชื่อ....">
                            <button class="btn btn-primary input-group-addon" id="basic-addon1">Search</button>
                        </div>
                    </div>
            </div>
            </form>
    </div>
          

</div>
<div class="card-block">
        <div class="dt-responsive table-responsive">
                <table id="basic-btn" class="table table-striped table-bordered nowrap">
                        <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>LOT</th>
                                    <th>รายการสินค้า</th>
                                    <th>สถานะสินค้า</th>
                                    <th>จำนวน</th>
                                    <th>วันที่</th>
                                    <th>โดย</th>
                
                                </tr>
                            </thead>
                            <tbody>
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


@endsection