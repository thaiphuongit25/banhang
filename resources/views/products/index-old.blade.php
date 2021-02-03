@extends('layouts.app')
@section('content')
<div id="body-main" style="margin-top:10px">
    <div class="right mainDevice slideMain">
        <style type="text/css">
            #con_index h3 {
                margin: 0;
                padding: 4px 2px 0 5px;
                font-size: 11px;
            }

            #con_index div#feature_list {
                width: 1000px;
                height: 242px;
                overflow: hidden;
                position: relative;
            }

            #con_index div#feature_list ul {
                position: absolute;
                list-style: none;
                padding: 0;
                margin: 0;
            }

            #con_index ul#tabs {
                bottom: 10px;
                z-index: 8;
                width: 100%;
                text-align: center;
            }

            #con_index ul#tabs li {
                display: inline;
            }

            #con_index ul#tabs li a {
                text-decoration: none;
                display: inline-block;
                margin: 2px 3px;
                height: 15px;
                width: 15px;
                outline: none;
                cursor: pointer;
                background-color: rgba(234, 236, 236, 0.92);
            }

            #con_index ul#tabs li a:hover {
                text-decoration: none;
                background: green !important;
            }

            #con_index ul#tabs li a.current {
                background: green;
            }

            #con_index ul#tabs li a.current:hover {
                text-decoration: none;
                cursor: pointer;
            }

            #con_index ul#output {
                left: 0;
                width: 100%;
                height: 240px;
                position: relative;
            }

            #con_index ul#output li {
                position: absolute;
                width: 100%;
                height: 240px;
            }

            #con_index ul#output li a {
                bottom: 10px;
                right: 10px;
                padding: 8px 12px;
                text-decoration: none;
                font-size: 11px;
                color: #FFF;
            }

            #con_index ul#output li a:hover {}

            #con_index a {
                outline-color: #888 !important;
            }

            #con_index ul#output li img {
                width: 100% !important;
                height: 242px;
                position: absolute;
                top: 0;
                left: 0;
            }
        </style>
        <div id="con_index" style="margin-top:2px">
            <div id="feature_list">
                <ul id="output">
                    <li style="display: list-item;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner1.png">
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner7.png">
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner6.png">
                        </a>
                    </li>
                </ul>
                <ul id="tabs">
                    @foreach (getBanner(App\Enums\BannerType::Slider) as $slider)
                    <li>
                        <a href=""></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="left item-home mainDevice" style="margin-top: 10px;">
    @foreach($types as $type)
        @if (count($type->categories))
        <div class="item-ct-pr-home" id="{{ $type->id }}">
            <div class="title-item-ct-pr-home">
                <h2 style="float:left; color: #30a544">Danh sách món ăn</h2>
                <div class="clear"></div>
            </div>
        <style>
            
        </style>
        <div class="prev" id="{{$type->id}}"> <input type="hidden" class="page-{{$type->id}}" value="{{ 0 }}" > </div>
            <div class="content-item-ct-pr-home" id="products-ct-1">
            <div class="show-product-top" id="show-product-top-{{$type->id}}" style="margin-left: 8px; margin-right: 8px;">
                    @foreach ( getProductLimit($type->categories->pluck("id")) as $product )
                    <div class="v-p-t" id="{{ $product->id }}">
                        <div class="img-v-p popular ">
                            <a id="{{$product->id}}" class="review-product" href="/products/{{ $product->slug }}" title="" class="review_product"><img alt="EL817S" class="image-hover" src="{{ getProductImageUrl($product->id) }}"></a>
                        </div>
                        <div class="info-v-p">
                            <div class="name-a">
                                <a title="{{ $product->name }}" id="{{$product->id}}" class="review-product" href="/products/{{ $product->slug }}">{{ $product->name }}</a>
                            </div>
                            <div class="price blue">
                               {{ number_format($product->price) }} €/{{ unit_product($product->note) }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                <div class="clear"></div>
                </div>
            </div>
            <div class="next" style="" id="{{$type->id}}"></div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        @endif
    @endforeach
    </div>
    <style>
        .title-item-ct-pr-home a:hover {
            color: #c30
        }
    </style>

</div>
@endsection
