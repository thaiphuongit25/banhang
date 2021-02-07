<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>
    @if ($title = getSetting(App\Enums\SettingType::MetaTitle))
    {!!strip_tags($title->value)!!}
    @endif
  </title>
  <link rel="shortcut icon" href="{{ url('logo/logo.ico') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
      crossorigin="anonymous">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <!--  <script src="{{ url('js/jnoty.js') }}" defer></script>
  <script src="{{ url('js/jnoty.min.js') }}" defer></script> -->
  <script src="{{ url('js/main.js') }}" defer></script>
  <script src="{{ url('js/custom.js') }}" defer></script>
  <script src="{{ url('js/comment.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body data-cart="0">
  <div id="top-fix-scroll" class="top-fix-scroll" style="height: 40px;">
    <div id="top-fix-scroll">
      <div>
        <!-- <div class="logo-scroll">
          <div id="title" style="margin-top: 10px; font-size: 25px; color: #dc4b4b; font-family: cursive">
            <span>
              Bếp mẹ Sushi
            </span>
          </div>
        </div> -->
        <div class="form-scroll" id="main-search-scroll">
          <form action="/products" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
            <div class="namesub">
              <input type="text" placeholder="Tên món ăn" name="search" value="" autocomplete="off" id="txtQueryTop" class="defaultText text">
              <input type="submit" class="btn-search-home" value="" style="right:7px;top:4px">
            </div>
          </form>
        </div>
        <div class="register-cart" style="max-width: 55%;">
          <div class="register-scroll">
            <div class="user_control" style="display: flex;">
              <input type="hidden" id="check_login" value="0">
              @if (Auth::check())
                @if (Auth::user()->is_admin == true)
                  <a href="/admin" class="admin_btn">Trang quản trị</a> |
                @endif
                <a href="/mypage" class="mypage_btn">Chào {{ Auth::user()->name }} </a> |
                <form method="POST" class='logout' action="{{ route('logout') }}">@csrf<button class='logout_btn' type="submit"> Đăng xuất</button></form>
              @else
                <a href="/login" class="login_btn">Đăng Nhập </a>|<a href="/register" class="register_btn"> Đăng Ký</a>
              @endif
              <a class="support-img" href="/support/me"><img src="/images/yah.png" alt="Yah"></a>
            </div>
          </div>

          <div class="cart-scroll" id="box-cart-scroll">
            <div id="cart1" class="cart-popup-hover-scroll">
              <a class="bb-hover" href="/carts">
                <!-- <label class="lbcart">
                  Giỏ hàng
                </label> -->
                <span class="cartd" id="cartd">
                  <sup>
                    <strong style="color:red" class="card_value">0</strong>
                  </sup>
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <h1 class="h1_home">IC, transistor, capacitor, inductor, Linh kiện €iện tử, linh kien dien tu, electronic component</h1>
  <!-- <div id="divAdRight" style="position: absolute; top: 0px">
    @if ($leftMost = getBanner(App\Enums\BannerType::LeftMost))
        <a href="{{ $leftMost->link }}" TARGET="_blank">
            <img alt="{{ $leftMost->alt }}" width="140" class="" src="{{ URL::to('/') }}/images/{{ $leftMost->image }}" />
        </a>
    @endif
  </div> -->
  <div class="container">
    <div id="top_bar" class="col-12">
      <div class="col-12 main-col">
        <div class="menu-doc">
          <span class="view-menu"><img src="/images/menu-24.png" class="view-menu-btn"></span>
          <a href="/?mobile=1">
            <span class="view-desktop"><img src="/images/phone-24.png"></span>
          </a>
          <ul>
            <li><a href="/">Trang chủ</a></li>
            <li><a href="/carts">Giỏ hàng</a></li>
            <span><img src="/images/close_pirobox.png"></span>
          </ul>
        </div>
        <div class="textmenu_top" style="float: left; margin-left: 5px;">
          <img class="phone" src="/images/phone.png" alt="Phone">
          <a class="px" style="color: #0ca9b1; margin-left: 5px;" href="tel:00491629103986">00491629103986</a>
        </div>
        <div class="marquee">
          @if ($openTime = getSetting(App\Enums\SettingType::OpenTime))
          {!!html_entity_decode($openTime->value)!!}
          @endif
        </div>
        <div class="user_control" style="display: flex;">
          <input type="hidden" id="check_login" value="0">
          @if (Auth::check())
            @if (Auth::user()->is_admin == true)
              <a href="/admin" class="admin_btn">Trang quản trị</a> |
            @endif
            <a href="/mypage" class="mypage_btn">Chào {{ Auth::user()->name }} </a> |
            <form method="POST" class='logout' action="{{ route('logout') }}">@csrf<button class='logout_btn' type="submit"> Đăng xuất</button></form>
          @else
            <a href="/login" class="login_btn">Đăng Nhập </a>|<a href="/register" class="register_btn"> Đăng Ký</a>
          @endif
          <a class="support-img" href="/support/me"><img src="/images/yah.png" alt="Yah"></a>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div id="view_bar" class="col-12 main-col">
      <div id="title" style="margin-top: 15px; font-size: 45px; color: #dc4b4b; font-family: cursive">
          <span>
            Bếp mẹ Sushi
          </span>
      </div>
      <div id="info-website">
        <div id="box-cart" style="margin-top: 0; margin-bottom: 5px;">
          <div id="cart1" class="cart-popup-hover-main">
            <a class="bb-hover" href="/carts">
              <label class="lbcart">
                Giỏ hàng
              </label>
              <span class="cartd" id="cartd"><sup>
                  <strong style="color:red" class="card_value">0</strong>
                </sup>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="menubar" id="topmenubar" style="background-color: #00bb20">
      @include('menu')
    </div>
    <div id="menubar" class="markermenu" style="display: none; background-color: #00bb20">
      @include('menu_item')
    </div>
  </div>
  <div id="wrapper">
    <div id="body">
      <div class="flash-message">
        @include('layouts.partials.alert_section')
      </div>
      @yield('content')
      @include('footer')
      @include('auth.login_dialog')
    </div>
  </div>
  <a href="https://www.facebook.com/B%E1%BA%BFp-M%E1%BA%B9-Sushi-107058821240404/">
    <div id="left-support">
      <a href="https://www.facebook.com/B%E1%BA%BFp-M%E1%BA%B9-Sushi-107058821240404/">Chat</a>
    </div>
  </a>
  <!-- <div class="overlay"></div>
  <div class="go-top" style="display: block;"></div>
  <div class="clear"></div> -->
  <!-- @include('online_support') -->
</body>
</html>
