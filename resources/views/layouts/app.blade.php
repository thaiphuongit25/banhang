<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Nhà Phân Phối Linh Kiện Điện Tử - Hardwares</title>
  <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ url('js/main.js') }}" defer></script>
  <script src="{{ url('js/custom.js') }}" defer></script>
  <script src="{{ url('js/comment.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body data-cart="0">
  <!-- <div id="top-fix-scroll" class="top-fix-scroll">
    <div id="top-fix-scroll" class="top-fix-scroll">
      <div>
        <div class="logo-scroll">
          <a href="index.html"><img alt="" class="" src="upload/large/12525.jpg" /></a>
        </div>
        <div class="form-scroll" id="main-search-scroll">
          <form action="https://thegioiic.com/products" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
            <div class="namesub">
              <input type="text" placeholder="Tên sản phẩm" name="search" value="" autocomplete="off" id="txtQueryTop" class="defaultText text">
              <input type="submit" class="btn-search-home" value="" style="right:7px;top:4px">
            </div>
          </form>
        </div>
        <div class="register-cart">
          <div class="scroll-flag">
            <div class="flag f">
              <a href="forum.html"><img src="images/flag_vn.gif"></a>
            </div>
            <div class="flag">
              <a href="product/rf-detector.html"><img src="images/flag_en.gif"></a>
            </div>
          </div>
          <div class="register-scroll">
            <div class="user_control" style="position:relative;margin-top:5px">
              <input type="hidden" id="check_login" value="0">
              @if (Auth::check())
                      do this
              @else
              <a href="account/login.html">Đăng Nhập</a></a>
              | <a href="/register">Đăng Ký</a></a>
              @endif
            </div>
          </div>
          <div class="cart-scroll" id="box-cart-scroll">
            <div id="cart1" class="cart-popup-hover-scroll">
              <a class="bb-hover" href="carts.html">
                <label class="lbcart">
                  Giỏ hàng
                </label>
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
  </div> -->
  <h1 class="h1_home">IC, transistor, capacitor, inductor, Linh kiện điện tử, linh kien dien tu, electronic component</h1>
  <div id="divAdRight" style="position: absolute; top: 0px">
    <a href="http://ledsang.com/" TARGET="_blank"><img src="upload/large/10493.jpg" width="140" /></a>
  </div>
  <div class="container">
    <div id="top_bar" class="col-12">
      <div class="col-12 main-col">
        <div class="menu-doc">
          <span class="view-menu"><img src="/images/menu-24.png" class="view-menu-btn"></span>
          <a href="/?mobile=1">
            <span class="view-desktop"><img src="/images/phone-24.png"></span>
          </a>
          <ul>
            <li><a href="/product">Sản phẩm</a></li>
            <li><a href="/services">Dịch vụ</a></li>
            <li><a href="/forum">Diễn đàn</a></li>
            <li><a href="/news">Tin tức</a></li>

            <li><a href="/carts">Giỏ hàng</a></li>
            <li><a href="/lien-he">Liên hệ</a></li>
            <li><a href="/information">Thông tin</a></li>
            <span><img src="/images/close_pirobox.png"></span>
          </ul>
        </div>
        <div class="textmenu_top" style="float: left;">
          <img class="phone" src="https://thegioiic.com/assets/phone-5132c0a1dbb76aaf5137a4c070684d7332a2cd648f49606b6212839e8fc77b83.png" alt="Phone">
          <span class="px">(28)3896.8699</span> |
          <span class="px">0972924961</span>
        </div>
        <div class="marquee">
          <a href="">Giờ mở cửa: Thứ 2~7: 7:30~18:00 | CN: 8:00~16:30 (Bán thông trưa)</a>
        </div>
        <div class="user_control" style="display: flex;">
          <input type="hidden" id="check_login" value="0">
          @if (Auth::check())
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
      <div id="logo">
        <a class="logobat logo1" href="/"><img alt="" class="" src="https://thegioiic.com/upload/large/12525.jpg"></a>
        <a class="logobat logo2" href="https://thegioiic.com/pages/thegioiic-la-nha-phan-phoi-cua-waveshare"><img alt="" class="logo2" src="https://thegioiic.com/upload/large/14781.jpg"></a>
      </div>
      <div id="info-website">
        <div id="box-cart">
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
      <div style="float:right; line-height:0;" class="topad">
        <a target="_blank" href="https://thegioiic.com/services/phan-phoi-linh-kien-dien-tu-va-thiet-bi-dien-tu"><img alt="" class="top_ad" src="https://thegioiic.com/upload/large/12532.jpg"></a>
      </div>
      <div class="clear"></div>
    </div>
    <div class="menubar" id="topmenubar">
      @include('menu')
    </div>
    <div id="menubar" class="markermenu" style="display: none;">
      @include('menu_item')
    </div>
  </div>
  <div id="wrapper">
    <div id="body">
      @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
      @endif
      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      @yield('content')
      @include('auth.login_dialog')
    </div>
    <div id="footer">
      @include('footer')
    </div>
  </div>
  <div id="divAdLeft" style="position: fixed; top: 175px; right: 30.5px; display: block;">
    <a href="http://vinaautomation.com" target="_blank"><img src="https://thegioiic.com/upload/large/7282.jpg" width="140"></a>
  </div>
  <div id="left-support" class="btn-show-dialog-support">
    <a href="javascript:">Chat</a>
  </div>
  <div class="overlay"></div>
  <div class="go-top" style="display: block;"></div>
  <div class="clear"></div>
  <div class="autocomplete-suggestions " style="display: none; top: 149px; left: 868.5px; width: 352px;"></div>
  <div class="autocomplete-suggestions " style="display: none; top: 2500px; left: 386.938px; width: 424px;"></div>
</body>
</html>