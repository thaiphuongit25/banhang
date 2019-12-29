$(document).ready(function() {
    window.onload = function() {
        var curren_url = window.location.href.split("/").slice(-1)[0];
        if (curren_url === "carts") {
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
            $.ajax({
                type: 'get',
                url: '/cart_products?ids=' + ids,
                data: { ids: ids },
                success: function(data) {
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
                            "<tr>" +
                            "<td style='text-align:right;padding-right:5px'> 1000 </td>" +
                            "<td style='text-align:right;padding-right:5px'> 50.000 đ </td>" +
                            "</tr>" +
                            "</tbody>" +
                            "</table>" +
                            "</td>" +
                            "<td class='pq'>" +
                            "<input type='number' id='3000' value='18' class='cart-quantity-change' style='width:45px; text-align:center;' min='1>" +
                            "<br>" +
                            "<span class='green'> <span class='bb'>Hàng còn: </span><span class='iv'>" + value.quantity + "</span> Cái</span>" +
                            "</td>" +
                            "<td class='pup' style='text-align:right;padding-right:5px'>" +
                            "65,000 đ" +
                            "</td>" +
                            "<td class='pup' style='text-align:right;padding-right:5px'>" +
                            "1,170,000 đ" +
                            "</td>" +
                            "<td class='pa'>" +
                            "<a confirm='Bạn có muốn xóa?' data-remote='true' href='/carts/delete?id=" + value.id + "'>Xóa</a>" +
                            "</td>" +
                            "</tr>"
                        )
                    });
                },
                error: function(error) {
                    alert("Đã có lỗi xẩy ra");
                }
            });
        };

        var seeIdProducts = localStorage.getItem("saw_product");
        var listSeeIds = [];
        if (seeIdProducts) {
            JSON.parse(seeIdProducts).forEach(function(value) {
                listSeeIds.push(value.id);
            });
        }
        $.ajax({
            type: 'get',
            url: '/cart_products?ids=' + listSeeIds,
            data: { ids: ids },
            success: function(data) {
                $(".seed-product").append(
                    "<li>" +
                    "<div class='list-same'>" +
                    "<div class='image-same'>" +
                    "<a href='/products/lm258p'><img alt='' src='https://thegioiic.com/upload/medium/200.jpg'></a>" +
                    "</div>" +
                    "<div class='name-same'>" +
                    "<p class='name-a ablack'>" +
                    "<a style='padding:0' href='/products/" + data.slug + "'>" + data.name + "</a>" +
                    "</p>" +
                    "<p class='price blue'>" +
                    data.price + "đ/Cái" +
                    "</p>" +
                    "<p>" +
                    // "<span class='green'> <span class='bb'>Hàng còn: </span><span class='iv'>" + data.quantity + "</span> Cái</span>" +
                    "</p>" +
                    "</div>" +
                    "<div class='clear'></div>" +
                    "</div>" +
                    "</li>"
                );
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
});
