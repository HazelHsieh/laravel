@extends('layouts.shopcart-template')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop-create.css') }}">
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
                <textarea name="desc" id="desc"></textarea>
            </div>
            <div class="row ">
                <label for="">商品圖片</label>
                <input type="file" id="images" name="images[]" multiple {{-- onchange="imgupload()" （等於下面的間聽是件）--}}>
                <div id="upload-img">
                </div>
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
                <a href="/product">取消</a>
                <button type="submit">新增商品</button>
            </div>
        </form>
        </form>
        </form>
    </div>

@endsection

@section('js')
    <script>
        const imgInput = document.querySelector('#images');
        const uploadImg = document.querySelector('#upload-img');


        //Input用change
        imgInput.addEventListener('change', function(e) {
            let formData = new FormData()
            let files = e.target.files;
            for (let i = 0; i < files.length; i++) {
                formData.append('img[]', files[i])
            }

            formData.append('_token', '{{ csrf_token() }}')

            fetch('/product/imgUpload', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(result => {
                    result.forEach(function(element) {
                        uploadImg.innerHTML += `
                    <div class="imgcard">
                        <div class="delete-img" data-path="${element}">x</div>
                        <img src="${element}" alt="" width="200px">
                        <input type="text" name="img[]" value="${element}" hidden>
                    </div>`

                        let deleteBtns = document.querySelectorAll('.delete-img');
                        //console.log(deleteBtns);
                        deleteBtns.forEach(function(btn) {
                            //                                     誰觸發了事件 誰就會是e
                            btn.addEventListener('click', function(e) {
                                //              74行的data-path （js內建data-後的值 取值都用dataset.值得名稱）
                                //如果是 data-path 就用 dataset.path 抓值 ， 如果是data-id 就用 dataset.id抓值
                                console.log(e.target.dataset.path);
                                let formData = new FormData()
                                formData.append('img_path', e.target.dataset.path)
                                formData.append('_token', '{{ csrf_token() }}')
                                fetch('/product/imgDelete', {
                                        method: 'POST',
                                        body: formData,

                                    })
                                    //controller 的imgDelete
                                    .then((response) => {
                                        return response.text();
                                    })
                                    // 拿到後端的回傳結果
                                    .then((result) => {
                                        if (result == 'success') {
                                            e.target.parentElement
                                        .remove(); // 移除「this」父層
                                        }
                                    })
                            })
                        })

                    })
                });
        })

        // let deleteBtns = document.querySelectorAll('.delete-img');
        // console.log(deleteBtns);
        // deleteBtns.forEach(function(btn) {
        //     btn.addEventListener('click', function(e) {
        //         console.log(e);
        //     })
        // })
    </script>

@endsection
