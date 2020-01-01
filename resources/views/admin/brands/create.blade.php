@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Tạo thương hiệu</h1>
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
    <a href="{{ route('brands.index') }}" class="btn btn-default">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form method="post" action="{{ route('brands.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tên thương hiệu</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Miêu tả</label>
                <div class="col-sm-10">
                    <input type="text" name="desc" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="logo" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" />
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Thêm" />
            </div>
        </form>
    </div>
</div>
@stop
