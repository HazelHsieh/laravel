@extends('layouts.backstage-template')

@section('css')
<link rel="stylesheet" href="{{asset('/goods-create.css')}}">

@endsection
@section('main')
<div class="container">
    <form action="/product/store" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <label for="name">商品名稱</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="row custom">
            <label for="desc">商品介紹</label>
            <textarea id="desc" name="desc"></textarea>
        </div>
        <div class="row">
            <label for="images">商品圖片</label>
            <input type="file" id="images" name="images">
        </div>
        <div class="row">
            <label for="price">商品價格</label>
            <input type="number" id="price" name="price">
        </div>
        <div class="row">
            <label for="qty">庫存數量</label>
            <input type="number" id="qty" name="qty">
        </div>


        <div class="row btn">
            <a href="./blog.html">取消</a>
            <button type="submit">新增商品</button>
        </div>
    </form>
</div>
@endsection
