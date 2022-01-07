@extends('layouts.backstage-template')
@section('css')
    <link rel="stylesheet" href=" {{asset('./css/goods.css')}}">
@endsection

@section('main')
    <div class="container">
        <div class="product">
            <img src="../img/vtb-23846-18ohsosoftteddybear-lightbrown_feature4_20201012_0843.jpg" alt="">

            <img src="../storage/app/goods/nrZGDgVOmTn2TDPoRee5Q4iz1Cg4xPxNnKYbkLLi.jpg" alt="">
            {{-- <div class="img" ></div> --}}
            <div class="text">
                <div class="name">商品名稱</div>
                <div class="desc">
                    商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效商品很棒, 很多功效
                </div>
                <div class="price">價格: NT$1200元</div>
                <div class="qty">剩餘數量: 100個</div>
            </div>
        </div>
    </div>
@endsection
