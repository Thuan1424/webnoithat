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
	<link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/checkout.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div id="page">
		<main class="bg_gray">
		<form action="index.php?act=billcomfirm" method="post">
			<div class="container margin_30">
				<div class="page_header">
					<h1>Hóa đơn thanh toán</h1>
				</div>
				<!-- /page_header -->
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="step first">
							<h3>1. Thông tin người dùng và địa chỉ thanh toán</h3>
							<div class="tab-content checkout">
								<!-- Phần đăng ký -->
								<?php
									if (isset($_SESSION['user'])) {
										$user = $_SESSION['user']['user'];
										$address = $_SESSION['user']['address'];
										$email = $_SESSION['user']['email'];
										$tel = $_SESSION['user']['tel'];
									} else {
										$user = "";
										$address = "";
										$email = "";
										$tel = "";
									}
									?>
								<div class="tab-pane fade show active" id="tab_1" role="tabpanel"
									aria-labelledby="tab_1">
									<label for="">Họ tên</label>
									<div class="form-group">
										<input type="text" class="form-control" name="user" value="<?= $user ?>">
									</div>
									<label for="">Email</label>
									<div class="form-group">
										<input type="email" class="form-control" name="email" value="<?= $email ?>">
									</div>
									<label for="">Địa chỉ</label>
									<div class="form-group">
										<input type="text" class="form-control" name="address" value="<?= $address ?>">
									</div>
									<label for="">Số điện thoại</label>
									<div class="form-group">
										<input type="text" class="form-control" name="tel" value="<?= $tel ?>">
									</div>
									<hr>
								</div>
							</div>
						</div>
						<!-- /step -->
					</div>

					<div class="col-lg-4 col-md-6">
						<!-- Bước 2: Thanh toán và vận chuyển -->
						<div class="step middle payments">
							<h3>2. Thanh toán và Vận chuyển</h3>
							<!-- Phương thức thanh toán -->
							<ul name="idrole">
								<?php 
								    foreach ($listpttt as $pttt) {
										extract($pttt);
									echo'
								<li>
									<label class="container_radio" value="'.$id.'">'.$name_pttt.'
										<input type="radio" name="payment" checked>
										<span class="checkmark"></span>
									</label>
								</li>'; 
								}?>
							</ul>
							<!-- Thông tin thanh toán -->

							<h6 class="pb-2">Phương thức vận chuyển</h6>

							<!-- Phương thức vận chuyển -->
							<ul>
								<li>
									<label class="container_radio">Vận chuyển tiêu chuẩn<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Vận chuyển nhanh<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
						<!-- /step -->
					</div>

					<div class="col-lg-4 col-md-6">
						<!-- Bước 3: Tóm tắt đơn hàng -->
						<div class="step last">
							<h3>3. Tóm tắt đơn hàng</h3>
							<div class="box_general summary">
								<ul>
								    <img src="https://th.bing.com/th/id/OIP.WmtsIbaZVmllUXwGlMgP9AAAAA?w=274&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" class="product_image">
									<li class="clearfix"><span<em>1x Armor Air X Fear</em></span></li>
									<li class="clearfix"><span>Size: Vừa</span> <span>Giá: $145.00</span><span>Số lượng: x1</span></li>
									<li class="clearfix"><em><strong>Thành tiền</strong></em> <span>$450.00</span></li>
								</ul>
							</div>
							<!-- /box_general -->
						</div>
						<div class="box_general summary">
						<div class="total clearfix">TỔNG CỘNG <span>$450.00</span></div>
						</div>
						<!-- /step -->
					</div>
					<div class="box_general summary">
							<a href="confirm.html" class="btn_1 full-width">Xác nhận và Thanh toán</a>
						</div>
				</div>
				<!-- /row -->
			</div>
</form>
			<!-- /container -->
		</main>
		<!--/main-->
	</div>

</body>

</html>