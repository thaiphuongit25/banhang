<div class="">
    <div class="aHl"></div>
    <div id=":pf" tabindex="-1"></div>
    <div id=":o1" class="ii gt">
        <div id=":o2" class="a3s aXjCH ">
            <u></u>
            <div>
                <div style="font-size:16px">Xin chào khách <span class="il">hàng</span> 
                    {{ $order->user->name }}.
                </div>
            <div>Mã đơn <span class="il">hàng</span>: {{ $order->code }}</div>
                <div style="padding:0;clear:both">
                    <p><strong>Linhkieniotvn </strong> xin chân thành cảm ơn Quý khách đã lựa chọn sản phẩm của chúng tôi.</p>
                    <p>Quý khách có thể lựa chọn hình thức thanh toán chuyển khoản hoặc hình thức giao hàng thanh toán(COD).</p>
                    <p>Nếu chọn hình thức thanh toán chuyển khoản, sau khi chuyển khoản Quý khách liên hệ lại với <br> nhân viên Linhkieniotvn, chúng tôi sẽ gửi hàng ngay cho Quý khách.
                    </p>
                    <p>Cú pháp thanh toán: <strong> Họ Tên_Mã đơn hàng_Ngày đặt hàng. </strong></p>
                </div>
                <div style="padding:0;margin:5px 0;font-weight:bolder">
                    Danh Sách Sản Phẩm
                    <p>( Trích xuất đơn hàng của KH trên wesite)
                    </p>
                </div>
                <table border="1">
                    <tbody>
                        <tr>
                            <td>
                                No.
                            </td>
                            <td style="width:290px;font-weight:bold">
                                Sản phẩm
                            </td>
                            <td style="width:100px;font-weight:bold;text-align:center">
                                Số lượng mua
                            </td>
                            <td style="width:140px;font-weight:bold;text-align:center">
                                Đơn giá
                            </td>
                            <td style="width:160px;font-weight:bold;text-align:center">
                                Thành tiền
                            </td>
                            <td style="width:80px;font-weight:bold;text-align:center">
                                Tồn kho
                            </td>
                        </tr>
                        @foreach ($order->products as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                            <a style="text-decoration:none" href="{{ URL::to('/products/').'/'.$item->slug }}" target="_blank" >{{ $item->name }}</a>
                            </td>
                            <td style="text-align:right;padding-right:6px">
                                {{ $item->pivot->quantity}}  {{ $item->note }}
                            </td>
                            <td style="text-align:right;padding-right:6px">
                                {{ number_format($item->pivot->price) }}  đ 
                            </td>
                            <td style="text-align:right;padding-right:6px">
                               {{ number_format($item->pivot->quantity*$item->pivot->price) }}  đ 
                            </td>
                            <td style="text-align:right;padding-right:6px">
                                {{ $item->quantity }}
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td colspan="3" style="color:#c30;text-align:right;padding-right:6px">Tổng tiền</td>
                            <td style="text-align:right;padding-right:6px"> {{ total_money_of_products($order->products) }}  đ </td>
                        </tr>
                    </tbody>
                </table>
                <p><strong>Thông tin thanh toán:</strong></p>
                <p>Tên tài khoản: Công ty cổ phần Esystech.</p>
                <p>Số tài khoản: 0491000106298 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                <p>Ngân hàng Vietcombank – Chi nhánh Thăng Long.</p>
                <p>&nbsp;</p>
            </div>
            <p style="font-weight:bolder;color:#c30;padding:20px;clear:both;border-top:2px solid #09c">
            </p>
            <p><a title="Nhà phân phối linh kiện điện tử" href="http://linhkieniotvn.com/" target="_blank">Nhà phân phối linh kiện điện tử</a></p>
            <div class="yj6qo"></div>
            <div class="adL">
                <p></p>
            </div>
        </div>
    </div>
    <div id=":pa" class="ii gt" style="display:none">
        <div id=":pb" class="a3s aXjCH undefined"></div>
    </div>
    <div class="hi"></div>
</div>