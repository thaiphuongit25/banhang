@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Danh sách dịch vụ</h1>
<br>
@stop
@section('content')
<div class="card">
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
          <td>Tên</td>
          <td>Email</td>
          <td>Địa chỉ</td>
          <td>SĐT</td>
          <td>Công ty</td>
          <td>Mã số thuế</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->id }}</a></td>
            <td>{{ $user->name }}</td>
            <td><a href="{{ route('admin.users.show', $user->id) }}">{{ $user->email }}</a></td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->company_name }}</td>
            <td>{{ $user->tax_code }}</td>
            <td>
                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary">Details</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </div>
</div>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
@stop
