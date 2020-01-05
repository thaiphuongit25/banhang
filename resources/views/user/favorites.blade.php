@extends('layouts.app')
@section('content')

<div id="wrapper">
  <div id="body">
    @include('layouts.mypage.side_menu')
    <div id="body-right">
      <div class="title-gf">
        Sản phẩm yêu thích
      </div>
      <div class="right-information">
        <table class="tbl-list" cellpadding="0" cellspacing="0">
          <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th class="action">Thao tác</th>
          </tr>
          @foreach ($products as $product)
            <tr id="{{ $product->id }}">
              <td class="img"><a href="/products/{{ $product->slug }}"><img src="{{ URL::to('/') }}/images/{{ $product->image }}" alt="89" /></a></td>
              <td><a href="/products/{{ $product->slug }}">{{ $product->name }}</a></td>
              <td>
                {{ number_format($product->price) }} đ/cái<br />
                <span class='green'> <span class='bb'>Hàng còn: </span><span class='iv'>{{ $product->quantity }}</span> Cái</span>
              </td>
              <td>
              <!-- <p id="cart-p" style="padding-top:13px">
                    <input hidden value="{{ $product->id }}" class="products_id">
                    <input type="button" value="Thêm vào giỏ hàng" class="btn-cart btn-cart-show" id="{{$product->id}}">
                
                </p> -->
                <a data-remote="true" rel="nofollow" data-method="post" href="#" id="{{$product->id}}">
                  <input hidden value="{{ $product->id }}" class="products_id">
                  <img title="Add to cart" src="/images/cart-add-icon.png" alt="Cart add icon" />
                </a>
                <a confirm="Are you sure?" data-remote="true" href="/favorites/delete?id=10"><img title="Delete" src="/images/delete-icon.png" alt="Delete icon" /></a>
              </td>
            </tr>
          @endforeach
        </table>
      </div>

    </div>
    <div class="clear"></div>
  </div>
</div>
@endsection