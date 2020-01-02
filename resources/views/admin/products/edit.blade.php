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
        <form method="post" action="{{ route('admin.products.update', $product->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Tên sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Thương hiệu</label>
                <div class="col-sm-10">
                    <select name="brand_id" class="form-control">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"
                            @if ($brand->id == old($product->brand_id, $brand->id))
                                selected="selected"
                            @endif
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
                            @if ($category->id == old($product->category_id, $category->id))
                                selected="selected"
                            @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Miêu tả</label>
                <div class="col-sm-10">
                    <textarea name="desc">{{ $product->desc }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                    <label class="col-sm-2 col-form-label require">Chi tiết sản phẩm</label>
                    <div class="col-sm-10">
                        <textarea name="specification">{{ $product->specification }}</textarea>
                    </div>
                </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="image" value="{{ $product->image }}" />
                    <input type="hidden" name="hidden_image" value="{{ $product->image }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Giá cứng(VND)</label>
                <div class="col-sm-10">
                    <input type="input" name="price" class="form-control"  value="{{ $product->price }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Số lượng</label>
                <div class="col-sm-10">
                    <input type="input" name="quantity" class="form-control" value="{{ $product->quantity }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" value="{{ $product->slug }}" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tiêu đề meta</label>
                <div class="col-sm-10">
                    <input categorie="text" name="meta_title" value="{{ $product->meta_title }}" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Từ khóa meta</label>
                <div class="col-sm-10">
                    <input categorie="text" name="meta_keywords" value="{{ $product->meta_keywords }}" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Miêu tả meta</label>
                <div class="col-sm-10">
                    <input categorie="text" name="meta_description" value="{{ $product->meta_description }}" class="form-control" />
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" name="add" class="btn btn-primary input-lg" value="Cập nhật" />
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
    CKEDITOR.replace( 'specification', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
@include('ckfinder::setup')
@stop
