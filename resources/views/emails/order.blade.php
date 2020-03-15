<div class="">
    <div class="aHl"></div>
    <div id=":pf" tabindex="-1"></div>
    <div id=":o1" class="ii gt">
        <div id=":o2" class="a3s aXjCH ">
            <u></u>
            <div>
                <div style="font-size:16px">Xin chào khách <span class="il">hàng</span> 
                    {{ $order->user->name }},	
                </div>
            <div>Đơn đặt <span class="il">hàng</span>: {{ $order->code }}</div>
                <div style="padding:0;clear:both">
                    <p><span class="il">Linhkieniot</span> chân thành cảm ơn quý Khách đã mua sản phẩm.</p>
                    <p>Quý khách đã chọn thanh toán bằng {{ $order->note  }}, Thanh toán đơn <span class="il">vui lòng hàng ghi: </span> Họ và Tên_Mã đơn hàng_Ngày đặt hàng. Quý khách phản hồi bằng điện thoại hoặc email tới công ty.</p>
                    <p>Chúng tôi sẽ gửi <span class="il">hàng</span> khi nhận được thanh toán. Số vận đơn sẽ được gửi tới email của Quý khách.</p>
                    <p>Thông tin thanh toán bên dưới đơn <span class="il">hàng</span>.</p>
                </div>
                <div style="padding:0;margin:5px 0;font-weight:bolder">
                    Danh Sách Sản Phẩm
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
                            <a style="text-decoration:none" href="{{ URL::to('/products/').$item->slug }}" target="_blank" >{{ $item->name }}</a>
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
                            <td colspan="3" style="color:#c30;text-align:right;padding-right:6px">
                                Chuyển phát nhanh(Hà Nội)
                            </td>
                            <td style="text-align:right;padding-right:6px">					
                                37,000  đ 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="3" style="color:#c30;text-align:right;padding-right:6px">Tổng tiền</td>
                            <td style="text-align:right;padding-right:6px"> {{ total_money_of_products($order->products) }}  đ </td>
                        </tr>
                    </tbody>
                </table>
                <div style="font-weight:bolder;border-bottom:1px solid #bbb;margin:12px 0 5px 0">
                    Thông tin Khách <span class="il">hàng</span>
                </div>
                <table border="0">
                    <tbody>
                        <tr>
                            <td style="padding:3px;width:100px">
                                Tên khách <span class="il">hàng</span>:
                            </td>
                            <td style="font-weight:bolder">
                                {{ $order->user->name }}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:3px;width:100px">
                                Địa chỉ:
                            </td>
                            <td style="font-weight:bolder">					
                                {{ $order->user->address }}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:3px;width:100px">
                                Email: 
                            </td>
                            <td style="font-weight:bolder">
                            <a href="mailto:{{ $order->user->email }}" target="_blank"> {{ $order->user->email }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:3px;width:100px">
                                Điện thoại:
                            </td>
                            <td style="font-weight:bolder">
                                {{ $order->user->phone_number }}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:3px;width:100px">
                                Ghi chú: 
                            </td>
                            <td style="font-weight:bolder">
                                {{ $order->note }}
                            </td>
                        </tr>
                        <tr>
                            <td style="padding:3px;width:100px">
                                Tên công ty: {{ $order->user->company_name }}
                            </td>
                            <td style="font-weight:bolder">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p><strong>Thông tin tài khoản ngân <span class="il">hàng</span> của <span class="il">linhkieniotvn</span><br></strong></p>
                <p>Ngân <span class="il">hàng</span>:&nbsp;<span style="color:#0000ff">Ngân hàng Vietcombank – Chi nhánh Thăng Long.</span></p>
                <p>Tên tài khoản: Công ty cổ phần Esystech.</p>
                <p>Số tài khoản: 0491000106298 &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <p style="font-weight:bolder;color:#c30;padding:20px;clear:both;border-top:2px solid #09c">
            </p>
            <p><a title="Nhà phân phối linh kiện điện tử" href="http://linhkieniotvn.com/" target="_blank">linhkieniotvn.com</a></p>
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