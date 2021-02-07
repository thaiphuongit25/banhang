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
                            <img alt="image" class="img-slide" src="/images/panner2.png">
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner3.png">
                        </a>
                    </li>
                    <li style="display: list-item;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner4.png">
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner6.png">
                        </a>
                    </li>
                    <li style="display: none;">
                        <a href="">
                            <img alt="image" class="img-slide" src="/images/panner7.png">
                        </a>
                    </li>
                </ul>
                <ul id="tabs">
                    @foreach ([1, 2, 3, 4, 5, 6] as $slider)
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
                .showProduct {
                    display: flex;
                    flex-wrap: wrap;
                    grid-template-columns: repeat(4, 1fr);
                    border-top: 1px solid rgb(244, 244, 244)
                }
                .item {
                    border: 1px solid rgb(244, 244, 244);
                    padding: 10px 4px;
                    flex-basis: 24%;
                }
                .image-hover {
                    width: 230px;
                    height: 166px;
                    border-radius: 5px;
                } 
                @media (max-width: 768px) {
                    .item {
                        flex-basis: 47%;
                    }
                    .image-hover {
                        max-width: 160px;
                        height: 166px;
                        border-radius: 5px;
                    } 
                }
                .item-content {
                    position: relative;
                    display: block;
                    height: 100%;
                }
                .thump {
                    position: relative;
                    display: flex;
                    justify-content: center;
                }
                .content {
                    text-align: center;
                    margin-top: 10px;
                }
                .review-product {
                    color: #b536b7 !important;
                    font-size: 16px;
                    font-weight: bold;
                }
            </style>
            <div class="showProduct">
                @foreach ( getProductLimit($type->categories->pluck("id")) as $product )
                <div class="item">
                    <div class="item-content">
                        <div class="thump">
                            <a id="{{$product->id}}" class="review-product" href="/products/{{ $product->slug }}" title="" class="review_product">
                                <img alt="EL817S" class="image-hover" src="{{ getProductImageUrl($product->id) }}">
                            </a>
                        </div>
                        <div class="content">
                            <div class="name-a">
                                <a title="{{ $product->name }}" id="{{$product->id}}" class="review-product" href="/products/{{ $product->slug }}">{{ $product->name }}</a>
                            </div>
                            <div class="price blue">
                               {{ number_format($product->price) }} €/{{ unit_product($product->note) }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
                    <!-- @foreach ( getProductLimit($type->categories->pluck("id")) as $product )
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
                    @endforeach -->
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
