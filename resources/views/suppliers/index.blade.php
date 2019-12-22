@extends('layouts.app') 
@section('content')
<div class="container-crumb">
    <div class="texttitle sitemaps">
        <a href="/">Trang Chủ</a>
        <a href="/suppliers">Thương hiệu</a>
    </div>
</div>
<div id="body-left">
    @include('suppliers.menu_left')
</div>
<div id="body-right">
    @include('suppliers.menu_right')
</div>
@endsection