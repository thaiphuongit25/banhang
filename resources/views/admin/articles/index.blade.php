@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
<h1>Danh sách tin tức</h1>
<br>
<a href="{{ route('admin.articles.create') }}" class="btn btn-primary">Thêm mới Tin tức</a>
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
          <td>Tiêu đề</td>
          <td>Danh mục</td>
          <td>Nội dung</td>
          <td>Hình ảnh</td>
          <td>Slug</td>
          <td>Trạng thái</td>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->article_category->name }}</td>
            <td>{!! Str::words(strip_tags($article->content), 30, '...')  !!}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $article->thumbnail }}" class="img-thumbnail" width="75" /></td>
            <td>{{ $article->slug }}</td>
            <td>{{ statusStr($article->status) }}</td>
            <td>
                <a href="{{ route('admin.articles.edit',$article->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('admin.articles.destroy', $article->id)}}" method="post" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
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
@stop
