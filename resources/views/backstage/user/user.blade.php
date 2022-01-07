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
    <link rel="stylesheet" href="./css/layout.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
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
            <table id="user_table" class="display">
                <thead>
                    <tr>
                        <th>姓名</th>
                        <th>信箱</th>
                        <th>加入時間</th>
                        <th>購買次數</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>王小明</td>
                        <td>123@yahoo.com.tw</td>
                        <td>1988/12/12</td>
                        <td>4</td>
                        <td>
                            <a href="">查看客戶詳情</a>
                        </td>
                    </tr>
                    <tr>
                        <td>陳大明</td>
                        <td>123@gmail.com</td>
                        <td>1987/12/12</td>
                        <td>10</td>
                        <td>
                            <a href="">查看客戶詳情</a>
                        </td>
                    </tr>
                </tbody>
            </table>

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
            $('#user_table').DataTable();
        });
    </script>
</body>

</html>