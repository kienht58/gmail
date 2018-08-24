@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <a href="{{ route('stores.index') }}" class="btn btn-primary waves-effect waves-light"><span
                            class="m-r-5"><i class="fa fa-list"></i></span> List</a>
            </div>
            <h4 class="page-title">Chi tiết cửa hàng</h4>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('gmails') }}">Danh sách cửa hàng</a>
                </li>
                <li class="active">
                    <b>{{$store->name}}</b>
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0"><b>{{$store->name}}</b></h4>
                        {!! Form::open(['route' => ['stores.update', $store->id], 'method' => 'put', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                            @include('layouts.partials.errors')
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">Tên cửa hàng</label>
                                <div class="col-sm-9">
                                    {!! Form::text('name', $store->name, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Tên cửa hàng']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">Địa chỉ</label>
                                <div class="col-sm-9">
                                    {!! Form::text('address', $store->address, ['id' => 'address', 'class' => 'form-control', 'placeholder' => 'Địa chỉ']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">Số điện thoại</label>
                                <div class="col-sm-9">
                                    {!! Form::text('phone_number', $store->phone_number, ['id' => 'phone_number', 'class' => 'form-control', 'placeholder' => 'Số điện thoại']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">Loại cửa hàng</label>
                                <div class="col-sm-9">
                                    {!! Form::select('type', ['' => '--- Chọn loại cửa hàng ---'] + config('system.stores.type_name'), $store->type,
                                    ['id' => 'type', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right">KTV yêu cầu</label>
                                <div class="col-sm-9">
                                    {!! Form::select('create_by', ['' => '--- Chọn KTV yêu cầu ---'] + $users, $store->created_by,
                                    ['id' => 'user', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-success waves-effect waves-light"><i class="fa fa-check"></i> &nbsp;Lưu</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
