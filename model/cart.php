<?php
function viewcart(){
    global $img_sptt;
    $tong = 0;
    echo '<div class="container margin_30">
            <div class="page_header">
                <h1>Trang Giỏ Hàng</h1>
            </div>
            <!-- /page_header -->
            <table class="table table-striped cart-list">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th></th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Kích Thước</th> <!-- Thêm cột Kích Thước -->
                        <th>Tổng Cộng</th>
                        <th></th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>';

    foreach ($_SESSION['mycart'] as $i => $cart) {
         // Các phần tử trong $cart: [0] => id, [1] => name_sp, [2] => img, [3] => price, [4] => soluong, [5] => ttien, [6] => size
        $hinh = $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'">Xóa</a></td>';

        echo '<tr>
                <td>
                    <div class="thumb_cart">
                        <img src="'.$hinh.'" data-src="'.$hinh.'" alt="Ảnh">
                    </div>
                    <span class="item_cart">'.$cart[1].'</span>
                </td>
                <td></td>
                <td>
                    <strong>'.$cart[3].'$</strong>
                </td>
                <td>
                    <strong>'.$cart[4].'</strong>
                </td>
                <td>
                    <strong>'.$cart[6].'</strong>
                </td>
                <td>
                    <strong>'.$cart[5].'$</strong>
                </td>
                <td>
                    <strong>'.$xoasp_td.'</strong>
                </td>
            </tr>';
    }

    echo '</tbody>
        </table> <!-- /cart_actions -->
    </div>
    <!-- /container -->

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <ul>
                        <li>
                            <span>Tổng Cộng</span>'.$tong.'$
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>';
}
?>
<?php
    function insert_cart($iduser, $idpro, $img, $name_sp, $price,$size, $soluong, $thanhtien, $idbill){
        $sql="insert into cart(iduser,idpro,img,name_sp,price,size,soluong,thanhtien,idbill) value('$iduser','$idpro','$img','$name_sp','$price','$size','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }
    function loadall_cart_count($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
        //trả về số lượng phần tử có trong 1 mảng bill
    }
    ?>