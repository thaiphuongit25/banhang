<div class="right-page">
    <div class="right-forums-item">
        <div class="rdetails">
            @include('news_search_form')
        </div>
    </div>
    <div class="right-menu">
        <div class="title">Dịch vụ</div>
        <ul class="ul-left-page">
            @foreach (getSuggestServices() as $service)
            <li>
                <a class="tip-service" href="/services/{{ $service->slug }}">{{ $service->title }}</a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="right-ad">
        <a target="_blank" href="http://vnsmarthome.com"><img alt="" class="" src="https://thegioiic.com/upload/large/10574.jpg"></a>
    </div>

</div>