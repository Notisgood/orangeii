@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">เพิ่มประเภทนับเป็นสินค้า</a>
            </li>
        </ul>

        <div class="text-right">
           
            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มประเภทสินค้า</button>
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
                    <th>นับเป็น</th>
                    <th>ตัวคูณ</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                @foreach($producttypelist as $key => $r)
                    <tr>
                    <td>{{  $key+1 }}</td>
                    <td>{{ $r->product_code }}</td>
                    <td>{{ $r->product_multiply }}</td>
                    
                
                <td class=" icon-btn">

                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit-Modal_{{$r->uid_product_type}}"><i class="fa fa-pencil"></i> แก้ไข</button>
                    
            </td>  
        </tr>   
        @endforeach
            </tbody>
            <tfoot>
                    <th>ลำดับ</th>
                    <th>นับเป็น</th>
                    <th>ค่าคูณ</th>
                    <th>แก้ไข</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">เพิ่มประเภทสินค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ url('inProductType') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">นับเป็น</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_code" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ตัวคูณ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_multiply" required
                                    autocomplete="off">
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
{{-- **************************************modal edit*************************************************** --}}
@if(!empty($producttypelist))
        @foreach($producttypelist as $key => $r)
<div class="modal fade" id="edit-Modal_{{$r->uid_product_type}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">แก้ไขประเภทสินค้า</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('updatetype') }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{$r->uid_product_type}}" name="id">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">นับเป็น</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_code" id="code" value="{{$r->product_code}}" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ตัวคูณ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="product_multiply" id="multi"  value="{{$r->product_multiply}}" required
                                    autocomplete="off" >
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
@endforeach
@endif

@endsection