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
	<link href="css/listing.css" rel="stylesheet">


	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<style>

		/* Loại bỏ viền và thêm bóng */
.filter_type.version_22 ul li a {
  color: #333; /* Màu chữ mặc định */
  transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Hiệu ứng chuyển đổi màu và bóng khi hover */
  display: block;
  padding: 10px 15px;
  border-radius: 5px; /* Bo tròn góc */
  font-size: 19px;
  
}

.filter_type.version_22 ul li a:hover {
  color: #fff; /* Màu chữ khi hover */
  background-color: #333; /* Màu nền khi hover */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Thêm bóng khi hover */
}

		/* CSS cho danh mục */
.filter_type.version_22 ul {
  padding-left: 0;
  list-style: none;
}

.filter_type.version_22 ul li {
  margin-bottom: 5px;
}


		.toolbox.elemento_stick {
			display: flex;
			justify-content: center;
			align-items: center;
			/* Đảm bảo chiều cao của thành phần là 100% của parent container */
		}

		.toolbox.elemento_stick form {
			width: 100%;
			/* Đảm bảo form có chiều rộng tối đa */
		}

		.search_bar {
			display: flex;
			justify-content: center;
			align-items: center;
		}

	</style>
</head>

<body>
		<main>
			<div class="top_banner">
				<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
					<div class="container">
						<h1>Chất lượng - Sang trọng</h1>
						<p style="color: white;">Cung cấp cho bạn những sản phẩm cao cấp nhất</p>
					</div>
				</div>
				<video class="img-fluid" autoplay loop muted style="width: 100%;">
					<!-- Đặt đường dẫn video trong thuộc tính src -->
					<source src="video\pexels-curtis-adams-6356429 (1080p).mp4" type="video/mp4">
				</video>

			</div>

			<!-- /top_banner -->
			<div id="stick_here"></div>
			<div class="toolbox elemento_stick" style="background-color: #33200F;">
				<div class="col-xl-7 col-lg-9">
					<form>
						<div class="search_bar">
						</div>
					</form>
				</div>
			</div>
			<!-- /toolbox -->

			<div class="container margin_30">

				<div class="row">
					<aside class="col-lg-3" id="sidebar_fixed">
						<div class="main_title">
							<a href="index.php?act=sanpham"><h2>Danh mục</h2></a>
						</div>
						<div class="filter_col">
							<div class="filter_type version_22">
								<h4><ul>
                                <?php 
                                foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                    <a href="'.$linkdm.'">'.$name_dm.'</a>
                                </li>';
                                }
                                ?>
                            </ul></h4>
								<!-- /filter_type -->
							</div>
							<!-- /filter_type -->
						</div>
					</aside>
					<!-- /col -->
					<div class="col-lg-9">
					<div class="row small-gutters">
        <?php
        // Số sản phẩm trên mỗi trang
        $san_pham_moi_trang = 6;

        // Tính tổng số sản phẩm
        $so_san_pham = count($dssp);

        // Xác định trang hiện tại
        $trang_hien_tai = isset($_GET['page']) ? $_GET['page'] : 1;

        // Tính vị trí bắt đầu và kết thúc của sản phẩm trên trang hiện tại
        $bat_dau = ($trang_hien_tai - 1) * $san_pham_moi_trang;
        $ket_thuc = $bat_dau + $san_pham_moi_trang;

        // Hiển thị sản phẩm theo trang
        for ($i = $bat_dau; $i < $ket_thuc && $i < $so_san_pham; $i++) {
            $sp = $dssp[$i];
            extract($sp);

            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            $mr = ($i == 2 || $i == 5 || $i == 8 || $i == 11) ? "mr" : "";

            echo '<div class="col-6 col-md-4 ">
                    <div class="grid_item ' . $mr . '">
                        <span class="ribbon off">-30%</span>
                        <figure>
                            <a href="' . $linksp . '">
                                <img class="img-fluid lazy" src="' . $hinh . '" alt="Mẹ ảnh ko hiện">
                            </a>
                            <div data-countdown="2019/05/15" class="countdown"></div>
                        </figure>
                        <a href="' . $linksp . '">
                            <h3>' . $name_sp . '</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$' . $price . '</span>
                            <span class="old_price">$' . $price_goc . '</span>
                        </div>
                        <ul>
                            <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Add to cart"><i
                                        class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
					
                    <!-- /grid_item -->
                </div>';
        }
        ?>
                </div>							
						<!-- /row -->
						<div class="pagination__wrapper">
							<ul class="pagination">
							<?php
								$so_trang = ceil($so_san_pham / $san_pham_moi_trang);
								$trang_hien_tai = isset($_GET['page']) ? $_GET['page'] : 1;

								// Hiển thị nút prev
								if ($trang_hien_tai > 1) {
									echo '<li><a href="index.php?act=sanpham&page=' . ($trang_hien_tai - 1) . '" class="prev" title="previous page">&#10094;</a></li>';
								}

								// Hiển thị các trang
								for ($i = 1; $i <= $so_trang; $i++) {
									$active_class = ($trang_hien_tai == $i) ? 'active' : '';
									echo '<li><a class="' . $active_class . '" href="index.php?act=sanpham&page=' . $i . '">' . $i . '</a></li>';
								}

								// Hiển thị nút next
								if ($trang_hien_tai < $so_trang) {
									echo '<li><a href="index.php?act=sanpham&page=' . ($trang_hien_tai + 1) . '" class="next" title="next page">&#10095;</a></li>';
								}
								?>
							</ul>
						</div>
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
		</main>
		<!-- /main -->

</body>

</html>