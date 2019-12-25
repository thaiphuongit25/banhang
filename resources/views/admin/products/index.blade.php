@extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
<h1>Danh sách sản phẩm</h1>
@stop @section('content')
<div class="card">
    <div class="card-body">
    <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Tên sản phẩm</td>
          <td>Miêu tả</td>
          <td>Chi tiết sản phẩm</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->desc}}</td>
            <td>{{$product->specification}}</td>
            <td>
                <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
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
@stop @section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> @stop @section('js')
<script>
    console.log('Hi!');
</script>
@stop