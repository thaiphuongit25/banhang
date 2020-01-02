@extends('adminlte::page') @section('title', 'Danh sách sản phẩm') @section('content_header')
<h1>Danh sách đặt hàng</h1>
@stop @section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <form action="{{ route('admin.orders.index') }}" method="GET" class="col-sm-5">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Tìm kiếm">
                    <div class="input-group-append_btn">
                        <button type="submit" class="btn btn-secondary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="margin-button col-sm-7">
                <a href="{{ route('admin.orders.create') }}" class="btn btn-primary float-right">Thêm mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Khách hàng</td>
                    <td>Ngày đặt hàng</td>
                    <td>Tổng tiền</td>
                    <td>Trạng thái</td>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->date_order }}</td>
                    <td>{{ number_format($order->total) }} vnd</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br> {{ $orders->links() }}
    </div>
</div>
@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> @stop @section('js')
<script>
    console.log('Hi!');
</script>
@stop
