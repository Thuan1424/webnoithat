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
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/product_page.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
  
    <!-- SPECIFIC SCRIPTS -->
    <script  src="js/carousel_with_thumbs.js"></script>
            
    <!-- COMMON SCRIPTS -->
     <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
  
    <!-- SPECIFIC SCRIPTS -->
    <script  src="js/carousel_with_thumbs.js"></script>
</head>

<body>
    
    <div id="page">
    <main>
        <div class="container margin_30">
        <?php 
                extract($onesp);
            ?>
                <?php 
                $img = $img_path . $img;?>
                <div class="row">
                <div class="col-md-6">
                    <div class="all">
                        <div class="slider">
                            <div class="owl-carousel owl-theme main">
                                <div style="background-image: url(img/products/shoes/1.jpg);" class="item-box"><img src="<?=$img?>"></div>
                                <?php
                                $all_images = load_all_images_of_product($id); // $id là id của sản phẩm hiện tại
                                foreach ($all_images as $image) {
                                    $img_url = $img_path . $image['ten_anh'];?>
                                    <div style="background-image: url(<?=$img_url?>);" class="item-box"><img src="<?=$img_url?>"></div>
                                    <?php }?>
                                
                            </div>
                            <div class="left nonl"><i class="ti-angle-left"></i></div>
                            <div class="right"><i class="ti-angle-right"></i></div>
                        </div>
                        <div class="slider-two">
                            <div class="owl-carousel owl-theme thumbs">
                                <div style="background-image: url(img/products/shoes/1.jpg);" class="item active"><img src="<?=$img?>"></div>
                                <?php
                                $all_images = load_all_images_of_product($id); 
                                foreach ($all_images as $image) {
                                    $img_url = $img_path . $image['ten_anh']; ?>
                                    <div style="background-image: url(<?=$img_url?>);" class="item active"><img src="<?=$img_url?>"></div>
                                    <?php }?>
                            </div>
                            <div class="left-t nonl-t"></div>
                            <div class="right-t"></div>
                        </div>
                    </div>
                </div>
                <?php echo'
                <div class="col-md-6">
                    <!-- /page_header -->
                    <div class="prod_info">
                    ';
                ?>
                        <h1><?=$name_sp?></h1>
                        <?php echo'
                        <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span>
                        <p><small>SKU: MTKRY-0'.$id.'</small><br></p>
                        <div class="prod_options">';?>
                           
                            <div class="row">
                                <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Kích thước <a href=""  data-bs-toggle="modal" data-bs-target="#size-modal"><i class="ti-help-alt"></i></a></label>
                                <div class="col-xl-5 col-lg-5 col-md-6 col-6">
									<div class="custom-select-form">
										<select class="wide" name="size" id="sizeSelect"> <!-- Đặt tên cho select box -->
											<?php
											$idsp = $_GET['idsp']; // Giả sử id sản phẩm được truyền qua URL
											$all_kichthuoc = loadall_kichthuoc_by_idsp($idsp);

											if (empty($all_kichthuoc)) { // Kiểm tra nếu không có kích thước
												echo '<option>Nguyên bản</option>';
											} else {
												foreach ($all_kichthuoc as $kichthuoc) { ?>
													<option value="<?php echo $kichthuoc['name_kt']; ?>"><?php echo $kichthuoc['name_kt']; ?></option>
												<?php }
											} ?>
										</select>
										<script>
											$(document).ready(function(){
												// Lắng nghe sự kiện khi người dùng chọn size
												$('select[name="size"]').change(function(){
													var selectedSize = $(this).val(); // Lấy giá trị size đã chọn
													$('#selected_size').val(selectedSize); // Cập nhật giá trị size vào input hidden
												});
											});
										</script>
									</div>
								</div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="price_main"><span class="new_price">$<?=$price?></span><span class="percentage">-20%</span> <span class="old_price">$<?=$price_goc?></span></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
								<form action="index.php?act=addtocart" method="post">
									<input type="hidden" name="id" value="<?php echo $id; ?>">
									<input type="hidden" name="name_sp" value="<?php echo $name_sp; ?>">
									<input type="hidden" name="img" value="<?php echo $img; ?>">
									<input type="hidden" name="price" value="<?php echo $price; ?>">
									<input type="hidden" name="size" id="selected_size" value=""> <!-- Đặt tên cho trường input kích thước -->
									<div class="btn_add_to_cart">
										<input type="submit" name="addtocart" class="btn_1" value="Thêm vào giỏ hàng">
									</div>
								</form>
							</div>
                        </div>
                    </div>
                    <!-- /prod_info -->
                    <div class="product_actions">
                        <ul>
                            <li>
                                <a href="#"><i class="ti-heart"></i><span>Thêm vào yêu thích</span></a>
                            </li>
                            <li> <a href="#"><i class="ti-control-shuffle"></i><span>Chia sẻ sản phẩm</span></a></li> </ul>
                    </div>
                    <!-- /product_actions -->
                </div>
            </div>
            
            <!-- /row -->

        <!-- /container -->
        
        <div class="tabs_product">
            <div class="container">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Thông tin sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Bình luận</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /tabs_product -->
        <div class="tab_content_wrapper">
            <div class="container">
                <div class="tab-content" role="tablist">
                    <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
                        <div class="card-header" role="tab" id="heading-A">
                            <h5 class="mb-0">
                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
                                    Mô tả
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                            <div class="card-body">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <h3>Mô tả</h3>
                                        <?=$mota?>
                                    </div>
                                    <div class="col-lg-5">
                                        <h3>Specifications</h3>
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Color</strong></td>
                                                        <td>Blue, Purple</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Size</strong></td>
                                                        <td>150x100x100</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Weight</strong></td>
                                                        <td>0.6kg</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Manifacturer</strong></td>
                                                        <td>Manifacturer</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /TAB A -->
                    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                        <div class="card-header" role="tab" id="heading-B">
                            <h5 class="mb-0">
                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                    Bình luận
                                </a>
                            </h5>
                        </div>
                        <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
              
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <!--tải nội dung từ tệp PHP binhluan.php và hiển thị nó trong phần tử có id là "binhluan" -->
                            <script>
                                $(document).ready(function(){
                                    $("#binhluan").load("view/binhluan.php", {idpro: <?=$id?>});
                                });
                            </script>
                            <div class="row" id="binhluan">
                            
                            </div>
                            <!-- /card-body -->
                        </div>
                    </div>
                    <!-- /tab B -->
                </div>
                <!-- /tab-content -->
            </div>
            <!-- /container -->
        </div>
        <!-- /tab_content_wrapper -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Sản phẩm liên quan</h2>
                <span>Nội thất</span>
                <p>Bạn có thể tham khảo các mặt tương tự sau</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">
                <?php 
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $img=$img_spct. $img;
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<div class="item">
                        <div class="grid_item">
                        <span class="ribbon off">-10%</span>
                        <figure>
                            <a href="'.$linksp.'">
                                <img class="owl-lazy" src="'.$img.'" alt="">
                            </a>    
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                        <a href="'.$linksp.'">
                            <h3>'.$name_sp.'</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">'.$price.'</span>
                            <span class="old_price">'.$price_goc.'</span>
                        </div>
                        <ul>
                            <li>
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="name_sp" value="'.$name_sp.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <button type="submit" name="addtocart" class="btn_1" value="Thêm vào giỏ hàng"><i class="ti-shopping-cart"></i></button>
                            </form>
                            </li>
                        </ul>
                    </div>
                    </div> ';
                    }
                ?>
                
            </div>
            <!-- /products_carousel -->
        </div>
        <!-- /container --> 
        <!--/feat-->

    </main>
    <!-- /main -->

        </div>
</body>

</html>
