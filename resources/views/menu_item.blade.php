<ul>
    @foreach ( getCategories() as $category )
        <li class="root">
            <a href="/product/{{$category->slug}}">{{ $category->name }}</a>
            <ul class="ddsubmenustyle blackwhite" style="min-height: 545px; top: -1000px; left: -500px; visibility: hidden; z-index: -1;">
                <span class="titleul">{{ $category->name }}</span>
                @foreach ($category->products as $product)
                <li class="click">
                    <span class="spana">{{ $product->name }}</span>
                    <ul style="min-height: 545px; top: -1000px; left: -500px; visibility: hidden; z-index: -1;">
                        <span class="titleul crumb">
                                <span class="background-crumb-menu">{{ $category->name }}</span>
                        <span>{{ $category->name }}</span>
                        </span>
                        <span class="close"></span>
                        <li>
                            <a href="/product/{{ $category->slug }}" class="a3"> {{ $category->name }}
                                    <span class="n3">({{ count($category->products) }})</span>
                                    </a>
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
