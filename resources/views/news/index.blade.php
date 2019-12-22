@extends('layouts.app') @section('content')
<div class="container-crumb">
    <div class="texttitle sitemaps">
        <a href="/">Trang Chủ</a>
        <a href="#">Tin tức</a>
    </div>
</div>
<div id="body-left">
    @include('news.menu_left')
</div>
<div id="body-right">
    @include('news.menu_right')
</div>
@endsection