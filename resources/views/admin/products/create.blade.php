@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Tạo sản phẩm</h1>
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
<div align="right" class="margin-button">
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back</a>
</div>

<div class="card">
    <div class="card-body">
        <form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Thương hiệu</label>
                <div class="col-sm-10">
                    <select name="brand_id" class="form-control">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"
                            >{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Danh mục</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Miêu tả</label>
                <div class="col-sm-10">
                    <textarea name="desc">{{ old('desc') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="image" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Giá cứng</label>
                <div class="col-sm-10">
                    <input type="input" name="price" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Số lượng</label>
                <div class="col-sm-10">
                    <input type="input" name="qunatity" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tiêu đề meta</label>
                <div class="col-sm-10">
                    <input categorie="text" name="meta_title" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Từ khóa meta</label>
                <div class="col-sm-10">
                    <input categorie="text" name="meta_keywords" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Miêu tả meta</label>
                <div class="col-sm-10">
                    <input categorie="text" name="meta_description" class="form-control" />
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Thêm" />
            </div>
        </form>
    </div>
</div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'desc', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
@include('ckfinder::setup')
@stop
