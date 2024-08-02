<div class="container margin_60_35">
    <div class="main_title">
        <h2>Sản phẩm hot</h2>
        <span>Products</span>
       
    </div>
    <div class="owl-carousel owl-theme products_carousel">
        
        <?php 
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp="index.php?act=sanphamct&idsp=".$id;
            $img=$img_path.$img;
            echo'<div class="item">
            <div class="grid_item">
                <span class="ribbon new">New</span>
                <figure>
                    <a href="'.$linksp.'">
                        <img class="owl-lazy" src="'.$img.'" data-src="'.$img.'" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                        class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                </div>
                <a href="'.$linksp.'">
                    <h3>'.$name_sp.'</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$'.$price.'</span>
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
            </div>';}?>
            
            <!-- /grid_item -->
        
    </div>
    <!-- /products_carousel -->
</div>