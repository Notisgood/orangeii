@extends('main')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}">

@endsection
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title" >
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
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
    <div class="md-overlay"></div>

</div>
<div class="card-block">
    <div class="dt-responsive table-responsive">
        <table id="footer-search" class="table table-striped table-bordered nowrap">
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
                    @foreach($productOutList as $key => $r)
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
            <tfoot>
                    <th>ลำดับ</th>
                    <th>LOT</th>
                    <th>รายการสินค้า</th>
                    <th>สถานะสินค้า</th>
                    <th>จำนวน</th>
                    <th>วันที่</th>
                    <th>โดย</th>

                </tr>
            </tfoot>
        </table>
    </div>
</div>

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

 @endsection