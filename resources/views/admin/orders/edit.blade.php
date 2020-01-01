@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Chỉnh sửa đơn hàng</h1>
@stop
@section('content')
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div align="right">
  <a href="{{ route('admin.orders.index') }}" class="btn btn-default">Back</a>
</div>

<div class="card">
  <div class="card-body">
    <form method="post" action="{{ route('admin.orders.update', $order->id) }}" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tên người mua</label>
        <div class="col-sm-10">
          <input type="text" name="name" class="form-control" value="{{ $order->user->name }}" disabled />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Ngày đặt đơn</label>
        <div class="col-sm-10">
          <input type="text" name="desc" class="form-control" value="{{ $order->date_order }}" disabled />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tổng giá trị đơn hàng</label>
        <div class="col-sm-10">
          <input type="text" name="desc" class="form-control" value="{{ $order->total }}" disabled />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Trạng thái</label>
        <div class="col-sm-10">
          <select name="status" class="form-control">
            @foreach(config('constants.order_status') as $status => $value)
            <option {{ $order->status == $value ? 'selected' : '' }} value="{{ $value }}">
              {{ $status }}
            </option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group text-center">
        <input type="submit" name="add" class="btn btn-primary input-lg" value="Cập nhật" />
      </div>
    </form>
  </div>
</div>
@stop