<div class="support-box">
    <div class="dialog-box" style="top: 292px; left: 685px; display: none;" id="supportbox">
        <div class="dialog-box-title">
            <h1>Online support</h1><input type="button" class="btn-close-dialog-support"
                onclick="$('#supportbox').hide()">
        </div>
        <div class="dialog-box-content">
            <ul>
                @foreach (getOnlineSupportSetting() as $setting)
                <li class="parent"><span>{{ $setting->value }}</span>
                    <ul>
                        @foreach ($setting->onlineSupportInformations as $info)
                        <li class="children">
                            <span>{{ $info->name }}</span>
                            <a class="zalo" href="{{ $info->zalo }}"
                                target="_blank"><img src="/images/icon_zalo.png"
                                    style="border: none;" width="24px" height="24px">
                            </a>
                            <a class="skype"
                                href="{{ $info->skype }}" target="_blank">
                                <img
                                    src="/images/icon_skype.png" style="border: none;" width="24px"
                                    height="24px">
                            </a>
                            <a class="facebook" href="{{ $info->facebook }}"
                                target="_blank">
                                <img src="/images/icon_messenger.png"
                                    style="border: none;" width="24px" height="24px">
                            </a>
                            <b>Tel: {{ $info->tel }}</b>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
