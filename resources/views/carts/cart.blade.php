@extends('layouts.app') @section('content')
<div id="body-main" style="margin-top:10px">
    <div class="left-content-cart left">
        <div id="infor_cart" style="margin-top:15px">
            <div class="title-gh">
                Giỏ hàng (<span class="number_order"></span>)
            </div>
            <div id="show-cart">
                <form id="update_cart" action="/carts/update_to_cart" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="✓">
                    <table class="cart" cellpadding="0" cellspacing="0">
                        <tbody class="list-carts">
                            <tr>
                                <th> No. </th>
                                <th> Tên sản phẩm </th>
                                <th> Bảng giá </th>
                                <th style="width: 90px;"> Số lượng mua </th>
                                <th> Đơn giá </th>
                                <th> Thành tiền </th>
                                <th> Xóa </th>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <style>
                    .image-hover {
                        width: 96%
                    }
                </style>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#total-cart-index").html($("#total-cart").html());
                        $("#value-total-cart").html($("#total-cart").html());
                        $("#value-total-cart").data("value", $("#total-cart").data('value'));
                        $(".btn-cod").click(function() {
                            $("#cod_payment").trigger('click');
                        });
                        $("#cod_payment").click(function() {
                            $("#cod_code").toggle();
                            if ($(this).is(":checked")) {
                                $("#bill_buy_cod").val("1");
                                var cod = $("#cod-value").data('value');
                                var total = parseInt(cod) + parseInt($("#total-cart").data('value'));
                                $("#total-cart").html(accounting.formatMoney(total, "", 0) + " đ");
                            } else {
                                $("#bill_buy_cod").val("0");
                                $("#total-cart").html(accounting.formatMoney($("#total-cart").data('value'), "", 0) + " đ");
                            }
                        });

                        $(".cart-quantity-change").change(function() {
                            var id = $(this).attr('id');
                            var quantity = $(this).val();
                            var form = jQuery("#update_cart");
                            if (!isNaN(quantity) && quantity != "" && quantity > -1) {
                                $.ajax({
                                    type: "POST",
                                    url: form.attr('action'),
                                    data: {
                                        product_id: id,
                                        quantity: quantity
                                    },
                                    dataType: "script",
                                    success: function() {

                                    }
                                });
                            } else {
                                alert("!!!Error!!!");
                            }
                        });
                    });
                </script>
            </div>
        </div>
        @if (Auth::guest())
        <div style="border:1px solid #DDD;padding:10px;text-align:center">
            Vui lòng
            <a style="margin:0 5px;" class="btn btn-primary" href="/login"><b>Đăng Nhập</b></a> để đặt hàng
        </div>
        @endif
        @if (!Auth::guest())
        <div id="infor_cart" style="margin-top:15px">
            <div class="title-gh">
                Hình thức giao hàng
            </div>
            <div class="method-cart">
                <ul>
                    <li>
                        <input type="radio" name="bill_buy" value="1" checked="checked" id="buy_in_shop">
                        <label for="buy_in_shop">Mua và thanh toán tại cửa hàng</label>
                    </li>
                    <li>
                        <input type="radio" name="bill_buy" value="2" id="buy_in_shop">
                        <label for="express_delivery">Chuyển phát nhanh</label>
                        <span id="express-delivery-value" data-value="37000" style="display:none">
                        37,000  đ
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div style="border:1px solid #DDD;padding:10px;">
            <ul id="list-info">
                <li>
                    <div id="action-cart">
                        <input type="submit" id="btnSubmit" value="Đặt hàng" class="btn btn-primary confirm-order">
                        <input type="button" value="Mua thêm" class="btn btn-warning continue-buy">
                    </div>
                </li>
            </ul>
            <div class="clear"></div>
        </div>

        @endif
        <div class="infor-cart-help">
            <div class="title-gh">
                Trợ giúp
            </div>
            <ul id="help-gh">
                @if ($help = getSetting(App\Enums\SettingType::Help))
                {!!html_entity_decode($help->value)!!}
                @endif
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    @if (Auth::guest())
    <div class="right-sidebar-cart right">
        <div style="background-color:#fff; border:1px solid #ccc; width:96%;float:right">
            <div class="title-gf" style="color:#FFF;padding: 5px 0 5px 10px;background: #3f96cf">
                Đăng Nhập
            </div>
            <div style="padding:1px 0 6px 9px;">
                <form class="new_user" id="new_user" method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
                    @csrf
                    <input name="utf8" type="hidden" value="✓">
                    <input type="hidden" name="authenticity_token" value="Hf0eVFUZ3koyS6UMWnRrFUWPLbC6OMbnTmeGgISGLM6QslQnaCWpp5HPj7GZ0/DDA6ITtgoy6gJlI8n65p8JEA==">
                    <p style="padding:8px 0 0 0; font-weight:bolder;">
                        Email
                    </p>
                    <p>
                        <input value="" style="border:1px solid #DDD; padding:6px;width:90%" type="text" name="email" id="user_email">
                        <input type="hidden" value="/carts" name="path">
                    </p>
                    <p style="padding:8px 0 0 0; font-weight:bolder;">
                        Mật khẩu
                    </p>
                    <p>
                        <input style="border:1px solid #DDD; padding:6px;width:90%" type="password" name="password" id="user_password">
                    </p>

                    <p style="padding:8px 0 0 0px; text-align:left;">
                        <input type="submit" name="commit" value="Đăng Nhập" class="btn btn-primary" data-disable-with="Đăng Nhập">
                    </p>
                    <p style="padding:8px 0 0 0px; text-align:left;"><span id="tool-log"><a href="/account/new_password">Quên mật khẩu?</a> | <a href="/users/new">Đăng Ký</a></span></p>
                </form>
                <div class="clear"></div>
            </div>
        </div>

    </div>
    @endif
    <script type="text/javascript">
        function checkForm(event) {
            var capt_value = $("#captcha_valid").val().toUpperCase();
            if (trim($("#input_captcha_valid").val()).toUpperCase() != trim(capt_value)) {
                $("#lb_capcha_error").show();
                $("#input_captcha_valid").addClass('border-red');
                event.preventDefault();
                return false;
            } else {
                $("#lb_capcha_error").hide();
                $("#input_captcha_valid").removeClass('border-red');
                clickOrder(event.target);
                return;
            }
        }

        $("#new_bill_buy").submit(function(e) {
            $("#btnSubmit").attr("disabled", true).addClass('disabled-button');
            return true;
        });
        $(document).ready(function() {
            if ($("#express_delivery").prop("checked")) {
                $("#express_delivery").click();
            }
            if ($("#cod_method").prop("checked")) {
                $("#cod_method").click();
            }
            if ($("#atm_method").prop("checked")) {
                $("#atm_method").click();
            }
            if ($("#buy_in_shop").prop("checked")) {
                $("#buy_in_shop").click();
            }
            if ($("#motorbike").prop("checked")) {
                $("#motorbike").click();
            }
        });

        $("#express_delivery").click(function() {
            $("#express-delivery-value").show();
            $("#motorbike-delivery-value").hide();
            $("#div-value-payment-area").show();
            $(".payment_method").show();
            $("#div-value-payment-area").show();
            var ship_payment = $("#express-delivery-value").data('value');
            var total_cart = $("#total-cart").data("value");
            var cod_payment = 0;
            if ($("#cod_method").prop("checked")) {
                cod_payment = $("#cod-value").data("value");
            }
            var total = parseInt(ship_payment) + parseInt(total_cart) + parseInt(cod_payment);
            var total_ship = parseInt(ship_payment) + parseInt(cod_payment);
            var vat_payment = 0;
            if ($(".ordered_btn").prop("checked")) {
                vat_payment = Math.round(0.05 * total);
                $("#value-vat5").html(accounting.formatMoney(vat_payment, "", 0) + " đ");
            }
            $("#value-payment-area").html(accounting.formatMoney(total_ship, "", 0) + " đ");
            $("#value-total-cart").html(accounting.formatMoney((total + vat_payment), "", 0) + " đ");
            $("#value-total-cart").data('value', total);
            $.ajax({
                url: "/carts/save_option?delivery_method=2",
                dataType: "script"
            });
        })
        $("#motorbike").click(function() {
            $("#express-delivery-value").hide();
            $("#motorbike-delivery-value").show();
            $("#div-value-payment-area").show();
            $(".payment_method").show();
            var motorbike_payment = $("#motorbike-delivery-value").data('value');
            var total_cart = $("#total-cart").data("value");
            var cod_payment = 0;
            if ($("#cod_method").prop("checked")) {
                cod_payment = $("#cod-value").data("value");
            }
            var total = parseInt(motorbike_payment) + parseInt(total_cart) + parseInt(cod_payment);
            var vat_payment = 0;
            if ($(".ordered_btn").prop("checked")) {
                vat_payment = Math.round(0.05 * total);
                $("#value-vat5").html(accounting.formatMoney(vat_payment, "", 0) + " đ");
            }
            var total_ship = parseInt(motorbike_payment) + parseInt(cod_payment);
            $("#value-payment-area").html(accounting.formatMoney(total_ship, "", 0) + " đ");
            $("#value-total-cart").html(accounting.formatMoney((total + vat_payment), "", 0) + " đ");
            $("#value-total-cart").data('value', total);
            $.ajax({
                url: "/carts/save_option?delivery_method=3",
                dataType: "script"
            });
        })
        $("#buy_in_shop").click(function() {
            $("#express-delivery-value").hide();
            $("#motorbike-delivery-value").hide();
            $(".payment_method").hide();
            $("#div-value-payment-area").hide();
            var total_cart = $("#total-cart").data("value");
            var total = parseInt(total_cart);
            var vat_payment = 0;
            if ($(".ordered_btn").prop("checked")) {
                vat_payment = Math.round(0.05 * total);
                $("#value-vat5").html(accounting.formatMoney(vat_payment, "", 0) + " đ");
            }
            $("#value-total-cart").html(accounting.formatMoney((total + vat_payment), "", 0) + " đ");
            $("#div-value-payment-area").hide();
            $("#value-total-cart").data('value', $("#total-cart").data("value"));
            $.ajax({
                url: "/carts/save_option?delivery_method=1",
                dataType: "script"
            });
        })

        $("#cod_method").click(function() {
            $("#cod-value").show();
            $("#div-value-payment-area").show();
            var cod_payment = $("#cod-value").data('value');
            var total_cart = $("#total-cart").data("value");
            var ship_payment = 0;
            var motorbike_payment = 0;
            var vat_payment = 0;
            if ($("#express_delivery").prop("checked")) {
                ship_payment = $("#express-delivery-value").data('value');
            }
            if ($("#motorbike").prop("checked")) {
                motorbike_payment = $("#motorbike-delivery-value").data('value');
            }
            var total = parseInt(motorbike_payment) + parseInt(total_cart) + parseInt(ship_payment) + parseInt(cod_payment);
            if ($(".ordered_btn").prop("checked")) {
                vat_payment = Math.round(0.05 * total);
                $("#value-vat5").html(accounting.formatMoney(vat_payment, "", 0) + " đ");
            }
            var total_ship = parseInt(motorbike_payment) + parseInt(cod_payment) + parseInt(ship_payment);
            $("#value-payment-area").html(accounting.formatMoney(total_ship, "", 0) + " đ");
            $("#value-total-cart").html(accounting.formatMoney((total + vat_payment), "", 0) + " đ");
            $("#value-total-cart").data('value', total);
            $.ajax({
                url: "/carts/save_option?payment_method=1",
                dataType: "script"
            });
        })
        $("#atm_method").click(function() {
            $("#cod-value").hide();
            $("#div-value-payment-area").show();
            var total_cart = $("#total-cart").data("value");
            var ship_payment = 0;
            var motorbike_payment = 0;
            var vat_payment = 0;
            if ($("#express_delivery").prop("checked")) {
                ship_payment = $("#express-delivery-value").data('value');
            }

            if ($("#motorbike").prop("checked")) {
                motorbike_payment = $("#motorbike-delivery-value").data('value');
            }
            var total = parseInt(motorbike_payment) + parseInt(total_cart) + parseInt(ship_payment);
            if ($(".ordered_btn").prop("checked")) {
                vat_payment = Math.round(0.05 * total);
                $("#value-vat5").html(accounting.formatMoney(vat_payment, "", 0) + " đ");
            }
            var total_ship = parseInt(motorbike_payment) + parseInt(ship_payment);
            $("#value-payment-area").html(accounting.formatMoney(total_ship, "", 0) + " đ");
            $("#value-total-cart").html(accounting.formatMoney((total + vat_payment), "", 0) + " đ");
            $("#value-total-cart").data('value', total);
            $.ajax({
                url: "/carts/save_option?payment_method=2",
                dataType: "script"
            });
        })
        $(".ordered_btn").click(function() {
            if ($(this).is(':checked')) {
                $("#ordered").show();
                $("#vat-payment").show();
                var total_cart = $("#value-total-cart").data("value");
                var vat = Math.round(0.05 * total_cart);
                $("#value-vat5").html(accounting.formatMoney(vat, "", 0) + " đ");
                $("#value-total-cart").html(accounting.formatMoney((total_cart + vat), "", 0) + " đ");
            } else {
                $("#ordered").hide();
                $("#vat-payment").hide();
                $("#value-total-cart").html(accounting.formatMoney($("#value-total-cart").data('value'), "", 0) + " đ");
            }
        })

        function openConfirm() {
            window.location = "/";
        }
    </script>


</div>
@endsection
