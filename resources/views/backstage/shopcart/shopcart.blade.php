@extends('layouts.shopcart-template')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/shopcart.css') }}">
@endsection

@section('main')
    <div class="container">
        <h1>商品清單</h1>
        <a class="create-msg" href="/product/create">新增商品</a>

        @foreach ($productData as $product)
            {{-- @php
        dd($product->imgs);

        @endphp --}}
            <div id="product" class="my-5">
                <div class="row">
                    {{-- <div class="col-5 offset-1 img"></div> --}}
                    {{-- <img src="{{$product->imgs->image_path}}" alt=""> --}}
                    {{-- 如果有報 Undefined offset: 0 的錯誤，加@嘗試除錯看看 --}}
                    {{-- <div class="img" style="background-image: url('{{ asset(@$product->imgs[0]->image_path) }}')"></div> --}}
                    <img src="{{ asset(@$product->imgs[0]->image_path) }}" alt="" width="200">
                    <div class="text col-5 mx-4">
                        <div class="name h2">{{ $product->name }}</div>
                        <div class="desc my-3">{{ $product->desc }}</div>
                        <div class="price my-3">價格: {{ $product->price }}元</div>
                        <div class="qty my-2">剩餘數量: {{ $product->qty }}個</div>
                    </div>
                    <div class="manage">
                        <a href="/product/edit/{{ $product->id }}">編輯商品</a>
                        <a href="/product/delete/{{ $product->id }}">刪除商品</a>
                    </div>

                </div>

            </div>
        @endforeach

    </div>

@endsection
