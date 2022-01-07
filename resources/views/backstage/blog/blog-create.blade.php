@extends('layouts.shopcart-template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop-create.css') }}">
@endsection

@section('main')
    <div class="container">
        <form action="/blog/store" method="POST">
            @csrf
            {{-- <form method="post">@csrf <!-- {{ csrf_field() }} -->
            ... rest of form ...</form> --}}
            <div class="row">
                <label for="">文章標題</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="row">
                <label for="">文章作者</label>
                <input type="text" id="auther" name="auther">
            </div>
            <div class="row custom">
            <label for="">文章內文</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
            </div>
            <div class="row btn">
            <a href="./blog">取消</a>
            <button type="submit">新增文章</button>
        </div>
    </form>
    </form>
        </form>
    </div>

@endsection
