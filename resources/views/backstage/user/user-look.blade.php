@extends('layouts.shopcart-template')

@section('css')
<link rel="stylesheet" href="./css/layout.css">
@endsection

@section('main')
<div class="container">
    <form action="">
        <div>姓名</div>
        <div>王小明</div>
        <div>信箱</div>
        <div>abc@yahoo.com.tw</div>
        <div>加入時間</div>
        <div>1988/12/12</div>
        <div>4</div>
        <label for="">幫助使用者重設密碼</label>
        <input type="password" name="password" id="password">
        <div>
            <a href="">回到表頁</a>
            <button type="submit">修改密碼</button>
        </div>
    </form>
</div>

@endsection
