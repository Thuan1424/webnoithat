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
	<link href="css/cart.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<div id="toTop"></div><!-- Nút quay lại đầu trang -->

	<!-- COMMON SCRIPTS -->
	<script src="js/common_scripts.min.js"></script>
	<script src="js/main.js"></script>
	<style>
		.red a{
			background-color: red;
		}
		.gre a{
			background-color: green;
		}
	</style>

</head>

<body>
		<main class="bg_gray">
		<?php 
			viewcart(1);
		?>
			<div class="box_cart">
				<div class="container">
					<div class="row justify-content-end">
					<div class="col-xl-4 col-lg-4 col-md-6 gre">
							<a href="index.php?act=sanpham" class="btn_1 full-width cart">Tiếp tục mua hàng</a>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 red">
							<a href="index.php?act=delcart" class="btn_1 full-width cart">Xóa giỏ hàng</a>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<a href="index.php?act=bill" class="btn_1 full-width cart">Tiếp Tục Thanh Toán</a>
						</div>
						
					</div>
				</div>
			</div>
			<!-- /box_cart -->

		</main>
		<!--/main-->
	<!-- page -->



</body>

</html>