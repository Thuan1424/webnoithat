<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Majestic | Nội thất cao cấp </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/brands/z4871992908279_16a19fc978221fc75541dc94d278ae60-removebg-preview (1).png"
        type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
        href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
        href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/account.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
    <style>
        .page_header h1 {
            text-align: center;
        }
        .red{
            color: red;
        }
    </style>

</head>

<body>
    <main class="bg_gray">
        <div class="container margin_30">
            <div class="page_header">
                <h1>Quên mật khẩu</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                    <div class="form_container">
                            <form action="index.php?act=quenmk" method="post">
                            <div class="private box">
                                    <div class="row no-gutters">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email*">
                                        </div>
                                    </div>
                                <p>Một mật khẩu mới sẽ được gửi trong thời gian ngắn.</p>
                                <div class="text-center">
                                    <input type="submit" name="guiemail" value="Đặt lại Mật Khẩu" class="btn_1">
                                </div>
                            </form>
                            <?php 
                                if(isset($thongbao) && ($thongbao != "")){
                                    echo $thongbao;
                                }
                            ?>
                            <div class="text-center">
                                <br><br>
                                <p>Thử đăng nhập lại? <a href="index.php?act=dangnhap">Đăng nhập</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 d-none d-lg-block">
                            <ul class="list_ok">
                                <li>Tìm địa điểm</li>
                                <li>Kiểm tra vị trí chất lượng</li>
                                <li>Bảo vệ dữ liệu</li>
                            </ul>
                        </div>
                        <div class="col-md-6 d-none d-lg-block">
                            <ul class="list_ok">
                                <li>Thanh toán an toàn</li>
                                <li>Hỗ trợ 24H</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>