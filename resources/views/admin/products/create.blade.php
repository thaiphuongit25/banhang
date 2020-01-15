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
                    <input type="text" name="desc" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Chi tiết sản phẩm</label>
                <div class="col-sm-10">
                    <textarea name="specification">{{ old('specification') }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" name="image" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Giá cứng(VND)</label>
                <div class="col-sm-10">
                    <input type="input" name="price" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label require">Số lượng</label>
                <div class="col-sm-10">
                    <input type="input" name="quantity" class="form-control" />
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
            <div class="form-group row">
                <input type="hidden" name="count" value="1" />
                <label class="col-sm-2 col-form-label">Thêm đơn giá</label>
                <div class="col-sm-10" id="fields">
                    <div class="row margin-button">
                        <div class="col-sm-3">
                            <input autocomplete="off" class="form-control" name="number_" type="text" placeholder="Số lượng">
                        </div>
                        <div class="col-sm-3">
                            <input autocomplete="off" class="form-control" name="unit_" type="text" placeholder="Đơn giá(VND)">
                        </div>
                        <div class="col-sm-1">
                            <button id="b1" class="btn btn-primary add-more form-control" type="button">+</button>
                        </div>
                    </div>
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
<script src={{ url('js/custom.js') }}></script>
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
    CKEDITOR.replace( 'specification', {
        filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
    } );
</script>
@include('ckfinder::setup')
@stop
