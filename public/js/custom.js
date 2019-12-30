$(document).ready(function() {
    window.onload = function() {
        var curren_url = window.location.href.split("/").slice(-1)[0];

        function getListTD(atr) {
            var listTr = "";
            atr.forEach(function(value) {
                listTr +=
                    "<tr>" +
                    "<td style='text-align:right;padding-right:5px'>" + value.number + "</td>" +
                    "<td style='text-align:right;padding-right:5px'>" + formatPrice(value.unit_price) + "đ </td>"
                "</tr>";
            });
            return listTr;
        }

        var formatPrice = function(unit) {
            return Number((unit).toFixed(1)).toLocaleString();
        }

        var getUnit = function(units, quantity) {
            let unit = units[0].unit_price;
            units.forEach(function(value) {
                if (quantity < value.number) {
                    unit = value.unit_price;
                }
            });
            return [unit * quantity, unit];
        }

        var calculateUnitPrice = function() {
            var list_card = localStorage.getItem("list_card");
            if (list_card) {
                list_card = JSON.parse(list_card);
            } else {
                list_card = [];
            }
            var ids = [];
            list_card.forEach(function(value) {
                ids.push(value.id);
            });
            var quantityCurrent = function(id) {
                let quantity = 0;
                if (list_card) {
                    list_card.forEach(function(value) {
                        if (value.id == id) {
                            quantity = value.quantity;
                        }
                    });
                }
                return quantity;
            }

            var totalPrice = function(products) {
                let total = 0;
                products.forEach(function(value) {
                    total += getUnit(value.units, quantityCurrent(value.id))[0];
                });
                return total;
            }
            $.ajax({
                type: 'get',
                url: '/cart_products',
                data: { ids: ids },
                success: function(data) {
                    $(".number_order").html(data.length);
                    $('.list-carts').find("tr").toArray().forEach(function(value, index) {
                        if (index > 0) {
                            value.remove();
                        }
                    });
                    data.forEach(function(value, index) {
                        $('.list-carts').append(
                            "<tr>" +
                            "<td class='no'>" + index + 1 + "</td>" +
                            "<td class='pn'>" +
                            "<div style='width:29%;float:left;margin-right:1%'>" +
                            "<a href='/products/" + value.slug + "'><img alt='SG8V1' class='image-hover' src='https://thegioiic.com/upload/medium/2734.jpg'></a>" +
                            "</div>" +
                            "<div style='float:left;width:70%'>" +
                            "<a target='_blank' href='/products/" + value.slug + "'>" + value.name + "</a>" +
                            "</div>" +
                            "</td>" +
                            "<td class='pp'>" +
                            "<table cellpadding='0' cellspacing='0' style='width: 100%;height:75px'>" +
                            "<tbody>" +
                            "<tr>" +
                            "<td style='width:50px;'> Số lượng </td>" +
                            "<td style='width:90px;'> Đơn giá </td>" +
                            "</tr>" +
                            getListTD(value.units) +
                            "</tbody>" +
                            "</table>" +
                            "</td>" +
                            "<td class='pq'>" +
                            "<input type='number' id='" + value.id + "' value='" + quantityCurrent(value.id) + "' class='cart-quantity-change' style='width:45px; text-align:center;' min='1>" +
                            "<br>" +
                            "<span class='green'> <span class='bb'>Hàng còn: </span><span class='iv'>" + value.quantity + "</span> Cái</span>" +
                            "</td>" +
                            "<td class='pup' style='text-align:right;padding-right:5px'>" +
                            formatPrice(getUnit(value.units, quantityCurrent(value.id))[0]) + "đ" +
                            "</td>" +
                            "<td class='pup' style='text-align:right;padding-right:5px'>" +
                            formatPrice(getUnit(value.units, quantityCurrent(value.id))[1]) + "đ" +
                            "</td>" +
                            "<td class='pa'>" +
                            "<a class='remove-cart' id=" + value.id + ">Xóa</a>" +
                            "</td>" +
                            "</tr>"
                        )
                    });
                    $('.list-carts').append(
                        "<tr>" +
                        "<td colspan='5' style='border:none;text-align:right'>" +
                        "Tiền hàng" +
                        "</td>" +
                        "<td style='text-align: right;font-size: 15px;font-weight: bold;width:140px;border:none'>" +
                        "<span id='total-cart' data-value='1265000'>" +
                        formatPrice(totalPrice(data)) + "đ" +
                        "</span>" +
                        "</td>" +
                        "<td style='width:45px;border:none'></td>" +
                        "</tr>"
                    );

                },
                error: function(error) {
                    console.log("Đã có lỗi xẩy ra");
                }
            });
        }

        if (curren_url === "carts") {
            calculateUnitPrice();
        }

        $('.list-carts').on('change', '.cart-quantity-change', function() {
            let product_id = $(this).attr("id");
            let quantity = this.value;
            let list_cart = JSON.parse(localStorage.getItem("list_card"));
            list_cart.map(function(value) {
                if (value.id == product_id) {
                    return value.quantity = quantity;
                }
            });
            localStorage.setItem("list_card", JSON.stringify(list_cart));
            calculateUnitPrice();
        });

        $('.list-carts').on('click', ".remove-cart", function() {
            let id = $(this).attr("id");
            let atr = [];
            let list_cart = JSON.parse(localStorage.getItem("list_card"));
            atr = list_cart.filter(function(value) {
                return value.id != id;
            });
            localStorage.setItem("list_card", JSON.stringify(atr));
            $(".card_value").html(atr.length);
            calculateUnitPrice();
        });

        var seeIdProducts = localStorage.getItem("saw_product");
        var listSeeIds = [];
        if (seeIdProducts) {
            JSON.parse(seeIdProducts).forEach(function(value) {
                listSeeIds.push(value.id);
            });
        }
        $.ajax({
            type: 'get',
            url: '/cart_products',
            data: { ids: listSeeIds },
            success: function(data) {
                data.forEach(function(value) {
                    $(".seed-product").append(
                        "<li>" +
                        "<div class='list-same'>" +
                        "<div class='image-same'>" +
                        "<a href='/products/lm258p'><img alt='' src='https://thegioiic.com/upload/medium/200.jpg'></a>" +
                        "</div>" +
                        "<div class='name-same'>" +
                        "<p class='name-a ablack'>" +
                        "<a style='padding:0' href='/products/" + value.slug + "'>" + value.name + "</a>" +
                        "</p>" +
                        "<p class='price blue'>" +
                        formatPrice(value.price) + "đ/Cái" +
                        "</p>" +
                        "<p>" +
                        // "<span class='green'> <span class='bb'>Hàng còn: </span><span class='iv'>" + data.quantity + "</span> Cái</span>" +
                        "</p>" +
                        "</div>" +
                        "<div class='clear'></div>" +
                        "</div>" +
                        "</li>"
                    );
                });
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
});
