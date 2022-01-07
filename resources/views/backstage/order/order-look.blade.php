<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Bootstrap Core CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- layout css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


    <link rel="stylesheet" href="./css/layout.css">
    <link rel="stylesheet" href="./css/user-look.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="./bookshop-1202.html">
                <img src="https://www.eslitecorp.com/eslite/img/themeImg/logo_w.svg" width="200px" height="30px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./checkout1.html">
                            <i class="far fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.html">
                            <i class="far fa-user"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <form action="">
                <div>金流單號</div>
                <div>20220107001</div>
                <div>購買人</div>
                <div>123@yahoo.com.tw</div>
                <div>地址</div>
                <div>全家就是你家</div>
                <div>1988/12/12</div>
                <div>電話</div>
                <div>4</div>
                <table id="product_table" class="display">
                    <thead>
                        <tr>
                            <th>商品名</th>
                            <th>單價</th>
                            <th>數量</th>
                            <th>小記</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>超好吃蛋糕</td>
                            <td>300</td>
                            <td>50</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>超好吃慕斯</td>
                            <td>1200</td>
                            <td>30</td>
                            <td>3200</td>
                        </tr>
                    </tbody>
                </table>
                <div></div>
                <div>運費</div>
                <div>0</div>
                <div>總計</div>
                <div>13200</div>
                
                <label for="status">狀態</label>
                <input name="status" id="status">
                <select name="" id="">
                    <option value="1">待付款</option>
                    <option value="2">已付款</option>
                    <option value="3">已出貨</option>
                    <option value="4">已取消</option>
                </select>

                <div>
                    <a href="">回到表頁</a>
                    <button type="submit">修改狀態</button>
                </div>
            </form>
        </div>

    </main>

    <footer>
        <div class="footer-nav py-5 ">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="#">
                            <img class="navbar-footer-img"
                                src="https://www.eslitecorp.com/eslite/img/themeImg/logo_b.svg" width="190px"
                                height="30px" alt="">
                        </a>
                        <p class=" text-white font-weight-light"> 不只是一間書店，更是一個空間，一個安頓身心的場所。</p>
                    </div>
                    <div class="col">
                        <ul class="footer-menu">
                            <li class="footer-menu-item text-white ">CATEGORIES</li>
                            <li class="footer-menu-item text-white font-weight-light">First Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Second Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Third Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Fourth Link</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="footer-menu">
                            <li class="footer-menu-item text-white">CATEGORIES</li>
                            <li class="footer-menu-item text-white font-weight-light">First Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Second Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Third Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Fourth Link</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="footer-menu">
                            <li class="footer-menu-item text-white">CATEGORIES</li>
                            <li class="footer-menu-item text-white font-weight-light">First Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Second Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Third Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Fourth Link</li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul class="footer-menu">
                            <li class="footer-menu-item text-white">CATEGORIES</li>
                            <li class="footer-menu-item text-white font-weight-light">First Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Second Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Third Link</li>
                            <li class="footer-menu-item text-white font-weight-light">Fourth Link</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-light">
            <div class="container d-flex justify-content-between">
                <div class="copyright">
                    © 2020 Tailblocks — @knyttneve
                </div>
                <div class="community">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
        </div>

    </footer>


    <!-- jquery Core JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- popper Core JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <!-- bootstrap Core JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            //$(querySeleter裡面的條件).
            $('#product_table').DataTable();
        });
    </script>
</body>

</html>