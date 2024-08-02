
    <section>
    <header>
        <h1>Trang Home Admin</h1>
    </header>
<br><br>
        <h2>Sản phẩm mới nhất</h2>
        <table>
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $newest_products = loadall_sanpham_home();
                $count = 0;
                foreach ($newest_products as $product) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr>
                    <td>Majestic 0{$product['id']}</td>
                    <td>{$product['name_sp']}</td>
                    </tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Sản phẩm nhiều lượt xem nhất</h2>
        <table>
            <thead>
                <tr>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $popular_products = loadall_sanpham_top10();
                $count = 0;
                foreach ($popular_products as $product) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr>
                    <td>Majestic 0{$product['id']}</td>
                    <td>{$product['name_sp']}</td>
                    </tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Bình luận mới</h2>
        <table>
            <thead>
                <tr>
                    <th>Nội Dung Bình Luận</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $latest_comments = loadall_binhluan($idpro = 0);
                $count = 0;
                foreach ($latest_comments as $comment) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr><td>{$comment['noi_dung']}</td></tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Đơn hàng mới</h2>
        <table>
            <thead>
                <tr>
                    <th>Tên Khách Hàng</th>
                    <th>Thời Gian Đặt Hàng</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $new_orders = loadall_bill($kyw = "", $iduser = 0);
                $count = 0;
                foreach ($new_orders as $order) {
                    if ($count >= 5) {
                        break;
                    }
                    echo "<tr>
                    <td>{$order['bill_name']}</td> 
                    <td>{$order['ngaydathang']}</td>
                    </tr>";
                    $count++;
                }
                ?>
            </tbody>
        </table>
        <br><br>
        <h2>Biểu đồ thống kê</h2>
        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Loại Hàng</th>
                    <th>Số sản phẩm</th>
                    <th>Tổng lượt xem</th>
                    <th>Tổng giá trị</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                    foreach ($listthongke as $thongke) {
                        echo "<tr>
                            <td>{$thongke['madm']}</td>
                            <td>{$thongke['tendm']}</td>
                            <td>{$thongke['so_san_pham']}</td>
                            <td>{$thongke['tong_luot_xem']}</td>
                            <td>{$thongke['tong_gia_tri']}</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>
