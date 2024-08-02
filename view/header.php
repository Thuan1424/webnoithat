<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">

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
	<link href="css\style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/home_1.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
</head>


<body>
	<div id="page">

		<header class="version_1">
			<div class="layer"></div>
			<div class="main_header">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
							<div id="logo">
								<a href="index.php"><img
										src="img/brands/z4850441585797_0e1edcba21b9aefe75f9b693eb8dbe29__1_-removebg-preview.png"
										alt="" width="120" height="39"></a>
							</div>
						</div>
						<nav class="col-xl-6 col-lg-7">
							<a class="open_close" href="javascript:void(0);">
								<div class="hamburger hamburger--spin">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
							</a>
							<!-- Mobile menu button -->
							<div class="main-menu">
								<div id="header_menu">
									<a href="index.html"><img src="img/logo_black.svg" alt="" width="100"
											height="35"></a>
									<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
								</div>
								<ul>
									<li>
										<a href="index.php">Trang chủ</a>
									</li>
									<li>
										<a href="index.php?act=sanpham">Sản phẩm</a>
									</li>
									<li>
										<a href="index.php?act=lienhe">Liên hệ hỗ trợ</a>
									</li>
									<li>
										<a href="index.php?act=baiviet">Bài viết</a>
									</li>
									<li>
										<a href="index.php?act=gioithieu">Giới Thiệu</a>
									</li>
								</ul>
							</div>
							<!--/main-menu -->

						</nav>
						<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
							<a class="phone_top" href="index.php?act=trogiup"><strong><span>Hỗ trợ tư vấn</span>+94
									423-23-221</strong></a>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			
			<!-- /main_header -->

			<div class="main_nav Sticky">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 col-md-3">
							<!-- Để chống -->
						</div>
						<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
							<div class="custom-search-input">
							<form action="index.php?act=sanpham" method="post">
								<input type="text" name="kyw" placeholder="Tìm kiếm sản phẩm...">
								<button type="submit" name="timkiem" ><i class="header-icon_search_custom"></i></button>
								</form>
							</div>
						</div>
						<?php 
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                            ?>
						<div class="col-xl-3 col-lg-2 col-md-3">
							<ul class="top_tools">
								<li>
									<div class="dropdown dropdown-cart">
									<?php
										if(isset($_SESSION['mycart']) && sizeof($_SESSION['mycart']) > 0){
										echo '<a href="index.php?act=viewcart" class="cart_bt">
																					<strong>'.sizeof($_SESSION['mycart']).'</strong></a>';
										}else{
										echo '<a href="index.php?act=viewcart" class="cart_bt">
																					<strong>0</strong></a>';
										}
										?>
										<div class="dropdown-menu">
										<?php
											if(isset($_SESSION['mycart']) && sizeof($_SESSION['mycart']) > 0){
											echo '<ul>';
											foreach ($_SESSION['mycart'] as $i => $cart) {
												$hinh = $cart[2];
												$ttien = $cart[3] * $cart[4];
												echo '<li><a href="index.php?act=noithatct">';
												echo '<figure><img src="'.$hinh.'" data-src="'.$hinh.'" alt="" width="50" height="50" class="lazy"></figure>';
												echo '<strong><span>'.$cart[1].'</span>'.$ttien.'$</strong>';
												echo '</a></li>';
											}
											echo '</ul>';
											echo '<div class="total_drop">';
											echo '<a href="index.php?act=viewcart" class="btn_1 outline">Xem giỏ hàng</a>';
											echo '<a href="index.php?act=bill" class="btn_1">Thanh toán</a>';
											echo '</div>';
											}else{
											echo '<p>Giỏ hàng của bạn đang trống.</p>';
											}
											?>

										</div>
									</div>
									<!-- Phần hover tài khoản giỏ hàng -->
									<!-- /dropdown-cart-->
								</li>
								<li>
									<a href="404.html" class="wishlist"><span>Wishlist</span></a>
								</li>
								<li>
									<div class="dropdown dropdown-access">
										<div class="anhtron">
											<a href="index.php?act=user" class="anhtron"><span></span></a>
										</div>
										<div class="dropdown-menu">
                                           <a href="index.php?act=user" class="btn_1"><?=$user?></a>
										<ul>
												<li>
													<a href="index.php?act=ktdonhang"><i class="ti-truck"></i>Check đơn hàng</a>
												</li>
												<li>
													<a href="index.php?act=user"><i class="ti-user"></i>Tài khoản của tôi</a>
												</li>
												<li>
													<a href="index.php?act=trogiup"><i class="ti-help-alt"></i>Trợ giúp</a>
												</li>
												<li>
													<a href="index.php?act=dangxuat"><i class="ti-help-alt"></i>Đăng xuất</a>
												</li>
											</ul>
										</div></div>

						<?php
						}else{
					    ?>		
						<div class="col-xl-3 col-lg-2 col-md-3">
					<ul class="top_tools">
						<li>
							<div class="dropdown dropdown-cart">
								<a href="index.php?act=giohang" class="cart_bt"><strong>0</strong></a>
								<div class="dropdown-menu">
									<ul>
										
									</ul>
									<div class="total_drop">
										<a href="#" class="btn_1 outline">Xem giỏ hàng</a>
										<a href="#" class="btn_1">Thanh toán</a>
									</div>
								</div>
							</div>
							<!-- Phần hover tài khoản giỏ hàng -->
							<!-- /dropdown-cart-->
						</li>
						<li>
							<a href="404.html" class="wishlist"><span>Wishlist</span></a>
						</li>
						<li>
							<div class="dropdown dropdown-access">
								<a href="index.php?act=dangnhap" class="access_link"><span>Tài khoản</span></a>
								<div class="dropdown-menu">
									<a href="index.php?act=dangnhap" class="btn_1">Đăng nhập</a>
									<ul>
										<li>
											<a href="#"><i class="ti-truck"></i>Check đơn
												hàng</a>
										</li>
										<li>
											<a href="#"><i class="ti-user"></i>Tài khoản của tôi</a>
										</li>
										<li>
											<a href="#"><i class="ti-help-alt"></i>Trợ giúp</a>
										</li>
									</ul>
								</div>
						<?php }?>
								

                                        
									</div>
									<!-- /-->

								</li>

							</ul>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<!-- /main_nav -->
		</header>
		<!-- /header -->