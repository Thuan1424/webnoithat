

    <section id="contai">
    <header>
        <h1>Danh sách đơn hàng</h1>
    </header>
    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Khách Hàng</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Số Lượng sản phẩm</th>
                    <th>Đã thanh Toán</th>
                    <th>PT Thanh toán</th>
                    <th>PT Vận chuyển</th>
                    <th>Tình Trạng Đơn Hàng</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    if(is_array($listbill)){
                        // Số đơn trên mỗi trang
                $donMoiTrang = 4;
                // Tính tổng số sản phẩm
                $soDon = count($listbill);
                 // Xác định trang hiện tại
                $trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;
                // Tính vị trí bắt đầu và kết thúc của sản phẩm trên trang hiện tại
                $batDau = ($trangHienTai - 1) * $donMoiTrang;
                $ketThuc = $batDau + $donMoiTrang;
                for ($i = $batDau; $i < $ketThuc && $i < $soDon; $i++) {
                    $bill = $listbill[$i];
                            extract($bill);
                            $suabill="index.php?act=suabill&id=".$id;
                            $xoabill="index.php?act=xoabill&id=".$id;
                            $ttdh=get_ttdh($bill['bill_status']);
                            $ten_khachhang = load_ten_khachhang($bill['iduser']);
                            $countsp=loadall_cart_count($bill['id']);
                            $name_pttt = load_ten_pttt($bill['idpttt']);
                            $nam_ptvc = load_ten_ptvc($bill['idptvc']);
                          echo'  <tr> 
                          <td><input type="checkbox" name="" id=""></td>
                            <td>Majestic-'.$bill['id'].'</td>
                            <td>' . $ten_khachhang . '</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$name_pttt.'</td>
                            <td>'.$nam_ptvc.'</td>
                            <td>'.$ttdh.'</td>
                            <td><a href="'.$suabill.'">
                    <input type="button"value="Sửa"></a>
                    <a href="'. $xoabill.'"><input type="button" value="Xóa"></a></td>
                            </tr>';
                        }
                    }
                ?>
                <?php $soTrang = ceil($soDon/$donMoiTrang); ?>
            </tbody>
        </table><br>
        <div class="center">
        <?php
            echo '<div class="pagination">';
            echo '<a href="index.php?act=listdh&page=1" class="prev">&laquo; Previous</a>';
            for ($i = 1; $i <= $soTrang; $i++) {
                echo '<a href="index.php?act=listdh&page=' . $i . '" class="page-num">' . $i . '</a>';
            }
            echo '<a href="index.php?act=listdh&page=' . $soTrang . '" class="next">Next &raquo;</a>';
            echo '</div>';
        ?>
       </div>
    </form>
    </section>
    <style>
    #contai form{
        width: 1000px;
       
    }
    #contai{
        min-width: 1050px;
        background-color: white;
        margin-left: 280px;
        margin-top: 60px;
    }
    .pagination {
    margin-top: 20px;
    text-align: center;
}

.pagination a {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    color: #333;
    border: 1px solid #ccc;
    margin: 0 4px;
}

.pagination a:hover {
    background-color: #f5f5f5;
}

.pagination .dots {
    padding: 8px 16px;
}

.pagination .prev,
.pagination .next {
    font-weight: bold;
}
.center {
  display: flex;
  justify-content: center; /* căn giữa theo chiều ngang */
  align-items: center; /* căn giữa theo chiều dọc */
}
</style>


