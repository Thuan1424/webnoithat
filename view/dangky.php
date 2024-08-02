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

    <script>
        // Client type Panel
        $('input[name="client_type"]').on("click", function () {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
        });
    </script>
    <style>
        .page_header h1 {
            text-align: center;
        }
        .select-style {
            width: 200px; /* Điều chỉnh độ rộng của select box */
            padding: 5px;
            font-size: 16px;
            border: 1px solid #ccc; /* Đổi màu viền nếu cần */
            border-radius: 5px; /* Bo tròn góc nếu cần */
            background-color: #f8f8f8; /* Màu nền */
            color: #333; /* Màu chữ */
}

    </style>

</head>

<body>

<main class="bg_gray">

<div class="container margin_30">
    <div class="page_header">
        <h1>Tạo một tài khoản</h1>
    </div>
 <!-- /page_header -->
    <div class="row justify-content-center">             
        <div class="col-xl-6 col-lg-6 col-md-8">
        
            <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
                <div class="box_account">
                    <h3 class="new_client">Khách hàng mới</h3> <small class="float-right pt-2">*Phần bắt
                        buộc</small>
                    <div class="form_container">
                        <div class="form-group">
                            <label for="">Ảnh đại diện:</label>
                            <input type="file" class="form-control-file"  name="avatar">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Tài khoản*">
                            <?php if(isset($thongbao1['user'])) echo "<span style='color:red;'>{$thongbao1['user']}</span>" ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" value=""
                                placeholder="Password*">
                                <?php if(isset($thongbao2['pass'])) echo "<span style='color:red;'>{$thongbao2['pass']}</span>" ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="" value=""
                                placeholder="Password*">
                                <?php if(isset($thongbao2['pass'])) echo "<span style='color:red;'>{$thongbao2['pass']}</span>" ?>
                        </div>
                        
                        <hr>
                        <div class="private box">
                            <div class="row no-gutters">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email*">
                                    <?php if(isset($thongbao3['email'])) echo "<span style='color:red;'>{$thongbao3['email']}</span>" ?>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Địa chỉ đầy đủ*"
                                            name="add">
                                            <?php if(isset($thongbao4['add'])) echo "<span style='color:red;'>{$thongbao4['add']}</span>" ?>
                                    </div>
                                </div>
                            </div>
                                <div class="col-6 pl-1"><div class="form-group">
                                                <input type="text" class="form-control" placeholder="Điện thoại *"
                                                    name="tel">
                                                    <?php if(isset($thongbao5['tel'])) echo "<span style='color:red;'>{$thongbao5['tel']}</span>" ?>
                                            </div>
                                        </div>
                                   
                                </div>
                                <!-- /private -->
                                <!-- /row -->
                            </div><br>
                            <div class="form-group">
                                <label class="container_check">Chấp nhận
                                    <a href="#0">Điều khoản và điều kiện</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Đăng Ký" class="btn_1 full-width" name="dangky">
                            </div>
                        </div>
                    </form>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
            </div>
        </div>
        <!-- /row -->
        <!-- /container -->
    </main>
    <!--/main-->

</body>

</html>