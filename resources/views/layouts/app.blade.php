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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ url('js/main.js') }}" defer></script>
    <script src="{{ url('js/custom.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>

<body data-cart="0">
    <div id="top-fix-scroll" class="top-fix-scroll">
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
                            <a href="account/login.html">Đăng Nhập</a></a>
                            | <a href="users/new.html">Đăng Ký</a></a>
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
    </div>
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
                    <img class="phone" src="/assets/phone-5132c0a1dbb76aaf5137a4c070684d7332a2cd648f49606b6212839e8fc77b83.png" alt="Phone">
                    <span class="px">(28)3896.8699</span> |
                    <span class="px">0972924961</span>
                </div>
                <div class="marquee">
                    <a href="">Giờ mở cửa: Thứ 2~7: 7:30~18:00 | CN: 8:00~16:30 (Bán thông trưa)</a>
                </div>
                <div class="user_control" style="position:relative;">
                    <input type="hidden" id="check_login" value="0">
                    <a href="/account/login">Đăng Nhập</a> | <a href="/users/new">Đăng Ký</a>
                    <a class="support-img" href="/support/me"><img src="/images/yah.png" alt="Yah"></a>
                </div>
                <div class="flag" style="float: right; padding-top:2px;">
                    <a href="/lang/en"><img width="22" height="14" border="0" style="vertical-align: top; margin: 2px 12px 0 0px; border: solid 1px #e0e2e2;" alt="" src="/images/flag_en.gif"></a>
                </div>
                <div class="flag" style="float: right; padding-top:2px;">
                    <a href="/lang/vi"><img width="21" height="14" border="0" style="vertical-align: top; margin: 2px 2px 0 0px; border: solid 1px #e0e2e2;" alt="" src="/images/flag_vn.gif"></a>
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
                            <span class="cartd" id="cartd">
                            <sup>
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
            @yield('content')
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
    <div class="autocomplete-suggestions " style="display: none; top: 149px; left: 868.5px; width: 352px;">
        <div class="autocomplete-suggestion-s">
            <a class="autocomplete-suggestion" data-href="/products/mg995-dong-co-servo-giam-toc-rc" data-val="MG995 Động Cơ Servo Giảm Tốc RC"><img src="/upload/medium/286.jpg"><span class="ne">MG995 Động Cơ Servo Giảm Tốc RC</span><span class="pri">73,000đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/mg946r-dong-co-servo-giam-toc-rc" data-val="MG946R Động Cơ Servo Giảm Tốc RC"><img src="/upload/medium/285.jpg"><span class="ne">MG946R Động Cơ Servo Giảm Tốc RC</span><span class="pri">99,000đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-hdmi-cai-typea-19pin-vuong-goc" data-val="Cổng HDMI Cái TypeA 19Pin Vuông Góc"><img src="/upload/medium/698.jpg"><span class="ne">Cổng HDMI Cái TypeA 19Pin Vuông Góc</span><span class="pri">2,800đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-db9-dau-cai-nam-ngang-han-pcb" data-val="Cổng DB9 Đầu Cái Nằm Ngang Hàn PCB"><img src="/upload/medium/982.jpg"><span class="ne">Cổng DB9 Đầu Cái Nằm Ngang Hàn PCB</span><span class="pri">2,700đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-db9-dau-duc-nam-ngang-han-pcb" data-val="Cổng DB9 Đầu Đực Nằm Ngang Hàn PCB"><img src="/upload/medium/983.jpg"><span class="ne">Cổng DB9 Đầu Đực Nằm Ngang Hàn PCB</span><span class="pri">2,700đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-db9-dau-duc-thang-han-pcb" data-val="Cổng DB9 Đầu Đực Thẳng Hàn PCB"><img src="/upload/medium/11406.jpg"><span class="ne">Cổng DB9 Đầu Đực Thẳng Hàn PCB</span><span class="pri">3,700đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/af90-cong-usb2-0-tyepa-dau-cai-4pin-90-do" data-val="AF90 Cổng USB2.0 TyepA Đầu Cái 4Pin  90 Độ"><img src="/upload/medium/647.jpg"><span class="ne">AF90 Cổng USB2.0 TyepA Đầu Cái 4Pin  90 Độ</span><span class="pri">680đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/bf90-cong-usb-typeb-dau-cai-4pin-90-do" data-val="BF90 Cổng USB TypeB Đầu Cái 4Pin 90 Độ"><img src="/upload/medium/988.jpg"><span class="ne">BF90 Cổng USB TypeB Đầu Cái 4Pin 90 Độ</span><span class="pri">1,400đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-db25-dau-duc-nam-ngang-han-pcb" data-val="Cổng DB25 Đầu Đực Nằm Ngang Hàn PCB"><img src="/upload/medium/999.jpg"><span class="ne">Cổng DB25 Đầu Đực Nằm Ngang Hàn PCB</span><span class="pri">4,500đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-usb2-0-typea-dau-cai-doi-8pin-90-do" data-val="Cổng USB2.0 TypeA Đầu Cái Đôi 8Pin 90 Độ"><img src="/upload/medium/1004.jpg"><span class="ne">Cổng USB2.0 TypeA Đầu Cái Đôi 8Pin 90 Độ</span><span class="pri">1,500đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/hang-rao-2-54-duc-doi-2x16pin-cao-11-6mm" data-val="Hàng Rào 2.54 Đực Đôi 2x16Pin Cao 11.6mm"><img src="/upload/medium/1006.jpg"><span class="ne">Hàng Rào 2.54 Đực Đôi 2x16Pin Cao 11.6mm</span><span class="pri">1,300đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/hang-rao-2-54-duc-doi-2x40pin-cao-12mm" data-val="Hàng Rào 2.54 Đực Đôi 2x40Pin Cao 12mm"><img src="/upload/medium/1007.jpg"><span class="ne">Hàng Rào 2.54 Đực Đôi 2x40Pin Cao 12mm</span><span class="pri">1,600đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/3p-kf128v-domino-3-chan-thang-5mm-han-pcb-loai-tot" data-val="3P-KF128V Domino 3 Chân Thẳng 5mm Hàn PCB Loại Tốt"><img src="/upload/medium/16169.jpg"><span class="ne">3P-KF128V Domino 3 Chân Thẳng 5mm Hàn PCB Loại Tốt</span><span class="pri">3,000đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/3p-kf301r-domino-3-chan-cong-5-08mm-han-pcb" data-val="3P-KF301R Domino 3 Chân Cong 5.08mm Hàn PCB"><img src="/upload/medium/10165.jpg"><span class="ne">3P-KF301R Domino 3 Chân Cong 5.08mm Hàn PCB</span><span class="pri">1,900đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/2p-kf301r-domino-2-chan-cong-5-08mm-han-pcb" data-val="2P-KF301R Domino 2 Chân Cong 5.08mm Hàn PCB"><img src="/upload/medium/10163.jpg"><span class="ne">2P-KF301R Domino 2 Chân Cong 5.08mm Hàn PCB</span><span class="pri">1,500đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/led-7-doan-0-56inch-xanh-la-1-so-duong-chung" data-val="LED 7 Đoạn 0.56inch Xanh Lá 1 Số Dương Chung "><img src="/upload/medium/1751.jpg"><span class="ne">LED 7 Đoạn 0.56inch Xanh Lá 1 Số Dương Chung </span><span class="pri">7,000đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/led-7-doan-0-56inch-do-1-so-duong-chung-v1" data-val="LED 7 Đoạn 0.56inch Đỏ 1 Số Dương Chung V1"><img src="/upload/medium/17368.jpg"><span class="ne">LED 7 Đoạn 0.56inch Đỏ 1 Số Dương Chung V1</span><span class="pri">2,300đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/led-7-doan-0-56inch-xanh-duong-1-so-duong-chung" data-val="LED 7 Đoạn 0.56inch Xanh Dương 1 Số Dương Chung"><img src="/upload/medium/1752.jpg"><span class="ne">LED 7 Đoạn 0.56inch Xanh Dương 1 Số Dương Chung</span><span class="pri">7,000đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/led-7-doan-0-56inch-vang-1-so-duong-chung" data-val="LED 7 Đoạn 0.56inch Vàng 1 Số Dương Chung"><img src="/upload/medium/1797.jpg"><span class="ne">LED 7 Đoạn 0.56inch Vàng 1 Số Dương Chung</span><span class="pri">4,500đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/nut-nhan-6x6-cao-5mm-2pin-xuyen-lo" data-val="Nút Nhấn 6x6 Cao 5mm 2Pin Xuyên Lỗ"><img src="/upload/medium/9653.jpg"><span class="ne">Nút Nhấn 6x6 Cao 5mm 2Pin Xuyên Lỗ</span><span class="pri">280đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/nut-nhan-6x6-cao-5mm-4pin-xuyen-lo" data-val="Nút Nhấn 6x6 Cao 5mm 4Pin Xuyên Lỗ"><img src="/upload/medium/11325.jpg"><span class="ne">Nút Nhấn 6x6 Cao 5mm 4Pin Xuyên Lỗ</span><span class="pri">500đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/cong-xh2-54-4pin-chan-cong" data-val="Cổng XH2.54 4Pin Chân Cong"><img src="/upload/medium/17511.jpg"><span class="ne">Cổng XH2.54 4Pin Chân Cong</span><span class="pri">290đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/led-7-doan-0-56inch-do-4-so-duong-chung" data-val="LED 7 Đoạn 0.56inch Đỏ 4 Số Dương Chung"><img src="/upload/medium/17519.jpg"><span class="ne">LED 7 Đoạn 0.56inch Đỏ 4 Số Dương Chung</span><span class="pri">6,900đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/hang-rao-2-54-duc-don-1x40pin-cao-11-4mm" data-val="Hàng Rào 2.54  Đực Đơn 1x40Pin Cao 11.4mm"><img src="/upload/medium/11203.jpg"><span class="ne">Hàng Rào 2.54  Đực Đơn 1x40Pin Cao 11.4mm</span><span class="pri">700đ/Cái</span></a>
            <a class="autocomplete-suggestion" data-href="/products/nut-nhan-4x4-cao-1-5mm-4pin-smd-chong-nuoc" data-val="Nút Nhấn 4x4 Cao 1.5mm 4Pin SMD Chống Nước"><img src="/upload/medium/9419.jpg"><span class="ne">Nút Nhấn 4x4 Cao 1.5mm 4Pin SMD Chống Nước</span><span class="pri">600đ/Cái</span></a>
        </div>
        <div class="autocomplete-suggestions " style="display: none; top: 58px; left: 0px; width: 114px;"></div>
    </div>
    <div class="autocomplete-suggestions " style="display: none; top: 2500px; left: 386.938px; width: 424px;"></div>
    <!-- <main class="py-4">
        @yield('content')
    </main> -->
</body>

</html>
