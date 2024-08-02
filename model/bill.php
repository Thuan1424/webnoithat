<?php 
    function bill(){
        global $img_sptt;
        $tong=0;
        $i=0;
        echo'<div class="step last">
        <h3>3. Tóm tắt đơn hàng</h3></div>';
        foreach ($_SESSION['mycart'] as $i => $cart) {
            $hinh = $cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            echo'<div class="step last">
            <div class="box_general summary">
                <ul>
                    <img src="'.$hinh.'" class="product_image">
                    <li class="clearfix"><label for="">Sản phẩm:</label><br>
                    <span<em>'.$cart[1].'</em></span></li>
                    <li class="clearfix"><span>Size: '.$cart[6].'</span> 
                    <span>Giá: $'.$cart[3].'</span>
                    <span>Số lượng: '.$cart[4].'</span></li>
                    <li class="clearfix"><em><strong>Thành tiền</strong></em>
                    <span>$'.$cart[5].'</span></li>
                </ul>
            </div>
            <!-- /box_general -->
        </div>';}
        $i+=1;
            echo '
            <div class="box_general summary">
				<div class="total clearfix">TỔNG CỘNG <span>'.$tong.' $</span></div>
			</div>';
    }?>
<style>
        .product_image {
            width: 50px; /* Adjust the width as needed */
            height: 50px; /* Adjust the height as needed */
            float: left;
            margin-right: 10px; /* Space between image and text */
        }
    </style>