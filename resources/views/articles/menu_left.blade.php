<div class="left-menu">
    <div class="title">
        Tin tức
    </div>
    <ul class="ul-left-page">
        @foreach (getArticleCategories() as $category)
        <li>
            <a class="parent" href="/news/{{ $category->id }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>
</div>
<div class="left-menu">
    <a target="_blank" href="http://vinasemi.com/"><img alt="" class="" src="https://thegioiic.com/upload/large/10577.jpg"></a>
</div>