<div class="report-product" style="position: relative">

    <div class="rp-user">
        <div class="title-rp">
            <div class="tt-rp">
                <b class="blue">Phản hồi ({{ count($article->comments) }})</b>
            </div>
        </div>
        @foreach ($article->comments as $comment)
        <div class="rplist">
            <div class="list-rp">
                <div class="cm-rp">
                    <div class="content-rp" style="color:#252525 !important;">
                        {!!html_entity_decode($comment->content)!!}
                    </div>
                </div>
                <div class="img-rp" style="width: 100%;">
                    <div class="avatar-report">
                        <a href="/users/{{ $comment->user->id }}"><span class="noavatarname">T</span></a>

                    </div>
                    <div class="name-rp" style="line-height: 2.2;">
                        <b>
                            <a href="/users/{{ $comment->user->id }}">
                                <em class="Highlight"
                                    style="padding: 1px; box-shadow: rgb(229, 229, 229) 1px 1px; border-radius: 3px; -webkit-print-color-adjust: exact; background-color: rgb(255, 255, 102); color: rgb(0, 0, 0); font-style: inherit;">
                                    {{ $comment->user->name }}
                                </em>
                            </a>
                        </b>
                        {{ date('(H:m - d/m/Y)', strtotime($article->created_at)) }}
                    </div>

                    <div class="reply" style="float: right; padding-right: 5px; line-height: 2.2;">
                        <a href="javascript:" class="btn-reply-report" data-product="177" data-category="1" id="984">Trả
                            lời</a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="reply-box" id="box-reply-report-984">

                </div>
                <div class="reply-container" style="width: 90%; float: right;" data-start="2" data-url="/comments/get/?parent_id=984" data-count="1">
                    @foreach ($comment->replies as $reply)
                    <div id="reply-container-984" class="reply-item">
                        <div class="list-rp">
                            <div class="cm-rp">
                                <div class="content-rp" style="color:#252525 !important;">
                                {!!html_entity_decode($reply->content)!!}
                                </div>
                            </div>
                            <div class="img-rp" style="width: 100%;">
                                <div class="avatar-report">
                                    <a href="/users/{{ $comment->user->id }}"><span class="noavatarname">T</span></a>

                                </div>
                                <div class="name-rp" style="line-height: 2.2;">
                                    <b>
                                        <a href="/users/{{ $comment->user->id }}">
                                            <em class="Highlight"
                                                style="padding: 1px; box-shadow: rgb(229, 229, 229) 1px 1px; border-radius: 3px; -webkit-print-color-adjust: exact; background-color: rgb(255, 255, 102); color: rgb(0, 0, 0); font-style: inherit;">
                                                {{ $comment->user->name }}
                                            </em>
                                        </a>
                                    </b>
                                    {{ date('(H:m - d/m/Y)', strtotime($reply->created_at)) }}
                                </div>

                                <div class="reply" style="float: right; padding-right: 5px; line-height: 2.2;">
                                    <a href="javascript:" class="btn-reply-report" data-product="177" data-category="1" id="984">Trả
                                        lời</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="reply-box" id="box-reply-report-984">

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        @endforeach
    </div>
    <form class="form-comment" id="new_comment" action="{{ route('comments.store') }}" accept-charset="UTF-8"
        method="post">
        @csrf
        <input name="utf8" type="hidden" value="✓">
        <input value="App\model\Article" type="hidden" name="commentable_type" id="commentable_type">
        <input value="{{ $article->id }}" type="hidden" name="commentable_id" id="commentable_id">
        <div class="form-report-product">
            <textarea class="text-change" placeholder="Nhập nội dung" name="content"
                id="content" style="width: 98%;"></textarea>
            <div id="captcha">
                <p style="position:relative;">
                    <input type="text" placeholder="Mã xác nhận" class="captcha-inputs" name="captcha"
                        id="input_captcha_valid" value="" style="width:84px; padding:4px;">
                    <span
                        style="font-weight:bolder; font-size:17px; color: #027AC7; padding-left:8px; letter-spacing:2px;  padding:5px 18px; position:absolute; top:0px; left:94px;">
                        ffeSrm
                    </span>
                    <span
                        style="position:absolute; background-color:transparent; width:200px; height:30px; top:0;left:131px;">&nbsp;</span>
                    <input type="hidden" class="text-change" value="ffeSrm" id="captcha_valid">
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
