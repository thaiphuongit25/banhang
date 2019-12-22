@extends('layouts.app') @section('content') @section('content')
<div class="container-crumb">
    <div class="texttitle sitemaps">
        <a href="/">Trang Chủ</a>
        <a href="/services">Dịch vụ</a>
    </div>
</div>
<div id="body-left">
    @include('services.menu_left')
</div>
<div id="body-right">
    @include('services.menu_right')
</div>
@endsection