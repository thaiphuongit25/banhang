<div class="report-product" style="position: relative">
    <div class="rp-user">
        <div class="title-rp">
            <div class="tt-rp">
                <b class="blue">Phản hồi(0)</b>
            </div>
        </div>
    </div>
    <form class="form-comment" id="new_report" action="/reports" accept-charset="UTF-8" data-remote="true" method="post">
        <input name="utf8" type="hidden" value="✓">
        <p style="color:red; font-weight:bolder; padding:4px 0 4px 60px;" class="formv"></p>
        <input value="9" type="hidden" name="report[product_id]" id="report_product_id">
        <input value="2" type="hidden" name="report[category]" id="report_category">
        <div class="form-report-product">
            <textarea class="text-change" placeholder="Nhập nội dung" name="report[content]" id="report_content" spellcheck="false"></textarea>
            <div id="captcha">
                <p style="position:relative;">
                    <input type="text" placeholder="Mã xác nhận" class="captcha-inputs" name="captcha" id="input_captcha_valid" value="" style="width:84px; padding:4px;">
                    <span style="font-weight:bolder; font-size:17px; color: #027AC7; padding-left:8px; letter-spacing:2px;  padding:5px 18px; position:absolute; top:0px; left:94px;">
                        LEBXRW
                    </span>
                    <span style="position:absolute; background-color:transparent; width:200px; height:30px; top:0;left:131px;">&nbsp;</span>
                    <input type="hidden" class="text-change" value="LEBXRW" id="captcha_valid">
                </p>
            </div>
            <div style="padding-top: 8px">
                <a class="hover" href="/account/login?path=%2Fservices%2F9"><b>Đăng Nhập</b></a> hoặc <a class="hover" href="/users/new?path=%2Fservices%2F9"><b>Đăng ký</b></a> để chia sẻ.
            </div>
        </div>
    </form>
</div>