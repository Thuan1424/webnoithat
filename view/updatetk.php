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
        .red{
            color:red
        }
    </style>

</head>

<body>

    <main class="bg_gray">

        <div class="container margin_30">
            
            <!-- /page_header -->
            
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <form action="index.php?act=updatetk" method="post">
                    <div class="box_account">
                        <div class="red">
                        <?php 
                            if(isset($thongbao)&&($thongbao!=""))
                            echo $thongbao;
                        ?> </div><br>
                        <h3 class="new_client">Sửa khách hàng</h3> <small class="float-right pt-2">*Phần bắt
                            buộc</small>
                        <?php 
                            if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                                extract($_SESSION['user']);
                            }
                        ?>
                        
                         
                        <div class="form_container">
                            <div class="form-group">
                                <label for="">Tài khoản</label>
                                <input type="text" class="form-control" name="user" value="<?=$user?>"
                                    placeholder="Tài khoản*">
                            </div>
                            <hr>
                            <div class="private box">
                            <div class="row no-gutters">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" value="<?=$email?>"
                                        placeholder="Email*">
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Địa chỉ</label>
                                        <input type="text" class="form-control" 
                                        placeholder="Địa chỉ đầy đủ*" name="add" value="<?=$address?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-6 pl-1">
                                    <div class="form-group">
                                        <label for="">Số điện thoại</label>
                                        <input type="text" class="form-control"
                                        placeholder="Điện thoại *" name="tel" value="<?=$tel?>">
                                    </div></div> 
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
                            <input type="submit" value="Lưu thông tin"
                            class="btn_1 full-width" name="capnhat">
                        </div>
                    </div>
                </form>
                <?php 
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                    <!-- /form_container -->
                </div>
                <!-- /box_account -->
            </div>
        </div>
        <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->


</body>

</html>