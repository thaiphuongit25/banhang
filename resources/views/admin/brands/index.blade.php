@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Danh sách thương hiệu</h1>
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
          <td>Tên thương hiệu</td>
          <td>Miêu tả</td>
          <td>Hình ảnh</td>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->desc}}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $brand->logo }}" class="img-thumbnail" width="75" /></td>
            <td>
                <a href="{{ route('brands.edit',$brand->id) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('brands.destroy', $brand->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
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
<script>
    console.log('Hi!');
</script>
@stop
