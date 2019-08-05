@extends('main')
@yield('css')
@section('content')
<div class="card-header">
    <h5>welcome</h5>  
</div>
<div class="card-block">
    <div class="row">
        <div class="col-sm-12 mobile-inputs">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control form-bg-primary" placeholder=".form-bg-primary">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-warning" placeholder=".form-bg-warning">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-default" placeholder=".form-bg-default">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-danger" placeholder=".form-bg-danger">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-success" placeholder=".form-bg-success">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-inverse" placeholder=".form-bg-inverse">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-bg-info" placeholder=".form-bg-info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@yield('scripts')
@endsection 