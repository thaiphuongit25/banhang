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

      
        function linkImage(image) {
            if(image.split("/").length > 2) {
                return image;
            } else {
                return `/images/${image}`;
            }
        }

        function getStatusCurrent(status, number) {
            let tmp = null;
            if (status == 1) {
                tmp = "<span class='green'> <span class='bb'>Hàng còn: </span><span class='iv'>" + number + "</span> Cái</span>";
            } else {
                tmp = "<span style='color: red'>Hết hàng</span>";
            }
            return tmp;
        }

        var formatPrice = function(unit) {
            return Number((unit).toFixed(1)).toLocaleString();
        }

        var getUnit = function(units, quantity, price) {
            let unit = price;
            if (units.length > 0) {
                unit = units[0].unit_price;
                for (let i = 0; i < units.length; i++) {
                    let tmp = null;
                    if (quantity <= units[i].number && tmp == null) {
                        unit = units[i].unit_price;
                        if (i > 0) {
                            tmp = units[i - 1].number;
                        } else {
                            break;
                        }
                    }
                    if (tmp && quantity < units[i].number) {
                        unit = units[i - 1].unit_price;
                        break
                    }
                    if (quantity >= units[units.length - 1].number) {
                        unit = units[units.length - 1].unit_price;
                    }
                }
            }
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
                let cart = [];
                let tmp = null;
                products.forEach(function(value) {
                    total += getUnit(value.units, quantityCurrent(value.id), value.price)[0];
                    tmp = getUnit(value.units, quantityCurrent(value.id), value.price);
                    cart.push({ id: value.id, quantity: quantityCurrent(value.id), unit: tmp[1] })
                });
                cart.push({ total: total });
                localStorage.setItem('buy_card', JSON.stringify(cart));
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
                    let j = 0;
                    data.forEach(function(value, index) {
                        j += 1;
                        $('.list-carts').append(
                            "<tr>" +
                            "<td class='no'>" + j + "</td>" +
                            "<td class='pn'>" +
                            "<div style='width:29%;float:left;margin-right:1%'>" +
                            "<a href='/products/" + value.slug + "'><img alt='SG8V1' class='image-hover' src='" + linkImage(value.image) + "'></a>" +
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
                            "<input type='number' id='" + value.id + "' value='" + quantityCurrent(value.id) + "' class='cart-quantity-change' style='width:45px; text-align:center;' min='1'>" +
                            "<br>" +
                            getStatusCurrent(value.status, value.quantity) +
                            "</td>" +
                            "<td class='pup' style='text-align:right;padding-right:5px'>" +
                            formatPrice(getUnit(value.units, quantityCurrent(value.id), value.price)[1]) + "đ" +
                            "</td>" +
                            "<td class='pup' style='text-align:right;padding-right:5px'>" +
                            formatPrice(getUnit(value.units, quantityCurrent(value.id), value.price)[0]) + "đ" +
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
                        "<a href='/products/lm258p'><img alt='' src='" + linkImage(value.image) + "'></a>" +
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
        $('.continue-buy').click(function() {
            window.location.href = "/";
        });
        $(".confirm-order").click(function() {
            let listCart = JSON.parse(localStorage.getItem('buy_card'));
            let carts = JSON.parse(localStorage.getItem('list_card'));
            if (carts == null || carts.length == 0) {
                alert("Vui lòng thêm sản phẩm đến giỏi hàng");
                return
            }
            let method_check = $(".method-cart").find('input').toArray();
            let note = "";
            method_check.forEach(function(value) {
                if (value.checked) {
                    if (value.value == "1") {
                        note = "Mua và thanh toán tại cửa hàng";
                    } else {
                        note = "Chuyển phát nhanh";
                    }
                }
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: '/buy_products',
                data: { cards: listCart, note: note },
                success: function(data) {
                    if (data == true) {
                        localStorage.removeItem('buy_card');
                        localStorage.removeItem('list_card');
                        setTimeout(alert('Đặt hàng thành công, Cửa hàng sẽ liên hệ đến quý khách trong thời gian sớm nhất để xác nhận đơn hàng. Xin cảm ơn.'), 2000);
                        window.location.href = "/";
                    }
                },
                error: function(error) {
                    console.log("da co loi xay ra");
                }
            })
        });
    }

    var next = 0;
    $(".add-more").click(function(e) {
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div class="row margin-button">' +
            '<div class="col-sm-3">' +
            '<input autocomplete="off" class="form-control" name="number_' + next + '"type="number" placeholder="Số lượng" data-items="1">' +
            '</div>' +
            '<div class="col-sm-3">' +
            '<input autocomplete="off" class="form-control" name="unit_' + next + '"type="number" placeholder="Đơn giá(VND)" data-items="2">' +
            '</div>' +
            '<div class="col-sm-1">' +
            '<button class="btn btn-danger remove-me form-control" type="button">-</button>' +
            '</div>' +
            '</div>';

        $("#fields").append(newIn);

        $('.remove-me').click(function(e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        });
    });
    $('.remove-me').click(function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
    });

    menu.build("menubar");
});