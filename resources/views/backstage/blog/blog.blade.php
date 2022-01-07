@extends('layouts.shopcart-template')

@section('css')
    <link rel="stylesheet" href="{{asset('./css/blog.css')}}">
@endsection

@section('main')
    <div class="function-area">
        <a class="create-msg" href="./blog/create">新增貼文</a>
    </div>

    <div id="message">
        @foreach ($news as $item)
            <div class="message-card">
                <div class="msg-info">
                    <div class="title">{{$item->title}}</div>
                    <div class="auther">{{$item->auther}}</div>
                    <div class="post-time">{{ substr($item->created_at , 0 , 10 ) }}</div>
                    <a href="/blog/edit/{{$item->id}}" class="edit">編輯</a>
                    <a href="/blog/delete/{{$item->id}}" class="delete">刪除</a>
                </div>
                <div class="msg-content">
                    {{$item->content}}
                </div>
            </div>

        @endforeach

    </div>
    {{-- <div id="message">
        <div class="message-card">
            <div class="msg-info">
                <div class="title">這是測試用的</div>
                <div class="auther">文章作者</div>
                <div class="post-time">po文時間</div>
            </div>
            <div class="msg-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum tempora atque ad maiores at quam labore nihil commodi earum, illo qui esse sit. Minus cumque temporibus autem illo eaque?</div>
        </div>
    </div>
    <div id="message">
        <div class="message-card">
            <div class="msg-info">
                <div class="title">這是測試用的</div>
                <div class="auther">文章作者</div>
                <div class="post-time">po文時間</div>
            </div>
            <div class="msg-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum tempora atque ad maiores at quam labore nihil commodi earum, illo qui esse sit. Minus cumque temporibus autem illo eaque?</div>
        </div>
    </div> --}}

@endsection


