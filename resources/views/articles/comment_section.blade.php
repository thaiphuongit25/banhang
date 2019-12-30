<div class="report-product" style="position: relative">

    <div class="rp-user">
        <div class="title-rp">
            <div class="tt-rp">
                <b class="blue">Phản hồi(1)</b>
            </div>
        </div>
        <div class="rplist">
            <div class="list-rp">
                <div class="cm-rp">
                    <div class="content-rp" style="color:#252525 !important;">
                        Cái này hay thế nhỉ
                    </div>
                </div>
                <div class="img-rp">
                    <div class="avatar-report">
                        <a href="/users/17669"><span class="noavatarname">T</span></a>

                    </div>
                    <div class="name-rp">
                        <b><a href="/users/17669"><em class="Highlight"
                                    style="padding: 1px; box-shadow: rgb(229, 229, 229) 1px 1px; border-radius: 3px; -webkit-print-color-adjust: exact; background-color: rgb(255, 255, 102); color: rgb(0, 0, 0); font-style: inherit;">Tang
                                    Hoai Duy</em></a></b>(08:42 - 30/12/2019)
                    </div>

                    <div class="reply">
                        <a href="javascript:" class="btn-reply-report" data-product="177" data-category="1" id="984">Trả
                            lời</a>
                    </div>
                </div>

                <div class="reply-box" id="box-reply-report-984">

                </div>
                <div class="reply-container" data-start="2" data-url="/comments/get/?parent_id=984" data-count="0">
                    <div id="reply-container-984">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <form class="form-comment" id="new_report" action="/reports" accept-charset="UTF-8" data-remote="true"
        method="post"><input name="utf8" type="hidden" value="✓">
        <input value="177" type="hidden" name="report[product_id]" id="report_product_id">
        <input value="1" type="hidden" name="report[category]" id="report_category">
        <div class="form-report-product">
            <textarea class="text-change" placeholder="Nhập nội dung" name="report[content]"
                id="report_content"></textarea>
            <div id="captcha">

                <p style="position:relative;">
                    <input type="text" placeholder="Mã xác nhận" class="captcha-inputs" name="captcha"
                        id="input_captcha_valid" value="" style="width:84px; padding:4px;">
                    <span
                        style="font-weight:bolder; font-size:17px; color: #027AC7; padding-left:8px; letter-spacing:2px;  padding:5px 18px; position:absolute; top:0px; left:94px;">
                        fyRCqh
                    </span>
                    <span
                        style="position:absolute; background-color:transparent; width:200px; height:30px; top:0;left:131px;">&nbsp;</span>
                    <input type="hidden" class="text-change" value="fyRCqh" id="captcha_valid">
                </p>
            </div>
            <div style="padding-top: 8px">
                <input type="submit" value="Đăng" class="btn btn-primary">
            </div>
        </div>

        <script type="text/javascript">
            $("#new_report").submit(function (event) {
                var capt_value = $(this).find("#captcha_valid").val().toUpperCase();
                if (trim($("#report_content").val()) == "") {
                    $("#report_content").addClass('input-errors');
                    event.preventDefault();
                    return false;
                } else if (trim($(this).find("#input_captcha_valid").val()).toUpperCase() != trim(capt_value)) {
                    $(this).find("#input_captcha_valid").addClass('input-errors');
                    event.preventDefault();
                    return false;
                } else {
                    return;
                }
            });

        </script>
    </form>
</div>
