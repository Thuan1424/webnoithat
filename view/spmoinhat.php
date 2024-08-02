<div class="container margin_60_35">
    <div class="main_title">
        <h2>Sản phẩm mới nhất</h2>
        <span>Nội Thất</span>
        
    </div>
    <div class="row small-gutters">
    <?php 
    $i = 0;
    foreach ($listsanpham_moinhat as $sanpham) {
        extract($sanpham);
        $img = $img_path . $img;
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        echo '    
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <figure>
                    <span class="ribbon off">-30%</span>
                    <a href="'.$linksp.'">
                        <img class="img-fluid lazy" src="'.$img.'" alt="">
                        <img class="img-fluid lazy" src="'.$img.'" alt="">
                    </a>
                    <div data-countdown="'.$ngaynhap.'" class="countdown"></div>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                        class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                </div>
                <a href="'.$linksp.'">
                    <h3>'.$name_sp.'</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$'.$price.'</span>
                    <span class="old_price">$'.$price_goc.'</span>
                </div>
                <ul>
                    <li><form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name_sp" value="'.$name_sp.'">
                    <input type="hidden" name="img" value="'.$img.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <button type="submit" name="addtocart" class="btn_1" value="Thêm vào giỏ hàng"><i class="ti-shopping-cart"></i></button>
                </form>
                    </li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
    ';
    $i += 1;
                if ($i % 4 == 0) {
                    echo '<div class=""></div>';
                }
    }
    ?>
</div>
    <!-- /row -->
</div>
<!-- /container -->