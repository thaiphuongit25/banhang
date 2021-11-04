@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Danh sách contacts</h1>
@stop
@section('content')
<div class="card">
    <div class="card-body">
        @include('admin.layouts.alert_section')
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Tên khách hàng</td>
                    <td>Email</td>
                    <td>Mesage</td>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->message}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
         <br>
        {{ $orders->links() }}
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
    console.log('Hi!');
</script>
@stop
