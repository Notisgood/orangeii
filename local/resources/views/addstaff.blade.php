@extends('main')
@section('content')
<div class="page-header">
    <div class="card-block">

        <ul class="breadcrumb-title">
            <li class="breadcrumb-item" style="margin-top: 20px;">
                <a href="index.html"> <i class="fa fa-home"></i> </a>
            </li>
            <li class="breadcrumb-item" style="margin-top: 20px;"><a href="#!">เพิ่มพนักงาน</a>
            </li>
        </ul>

        <div class="text-right">

            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                data-target="#large-Modal">เพิ่มพนักงาน</button>
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
                    <th>อีเมล</th>
                    <th>ตำแหน่ง</th>

                </tr>
            </thead>
            <tbody>
                @foreach($staff_all as $key => $r)
                <tr>
                    <td>{{  $key+1 }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->user_username }}</td>
                    <td>{{ $r->email }}</td>
                    <td>{{ $r->roles_des }}</td>
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
                <h4 class="modal-title">เพิ่มพนักงาน</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form name="myfrom" method="post" action="{{ route('add') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ชื่อ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" required autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ตำแหน่ง</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="role" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" required
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">password</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="password" required
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
@endsection