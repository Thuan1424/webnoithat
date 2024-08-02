

    <section>

<header>
        <h1>Danh sách danh mục</h1>
    </header>
    <form action="index.php?act=listsp" method="post">
        <label for="">Tìm kiếm sản phẩm</label>
                    <input type="text" name="kyw">
                    <input type="submit" name="listok" id="" value="Go"><br><br>
        <label for="">Tìm kiếm sản phẩm theo danh mục</label>
                    <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name_dm'] ?></option>
                <?php endforeach; ?>
                <input type="submit" name="listok" id="" value="Go">
            </select>
                    
                </form>
        

        <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá gốc</th>
                    <th>Giá</th>
                    <th>Ngày nhập</th>
                    <th>Lượt xem</th> 
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Số sản phẩm trên mỗi trang
                $sanPhamMoiTrang = 4;

                // Tính tổng số sản phẩm
                $soSanPham = count($listsanpham);

                // Xác định trang hiện tại
                $trangHienTai = isset($_GET['page']) ? $_GET['page'] : 1;

                // Tính vị trí bắt đầu và kết thúc của sản phẩm trên trang hiện tại
                $batDau = ($trangHienTai - 1) * $sanPhamMoiTrang;
                $ketThuc = $batDau + $sanPhamMoiTrang;

                // Hiển thị sản phẩm theo trang
                for ($i = $batDau; $i < $ketThuc && $i < $soSanPham; $i++) {
                    $sanPham = $listsanpham[$i];
                    extract($sanPham);
                    $linksp = "../index.php?act=sanphamct&idsp=" . $id;
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no photo";
                    }
                
                    echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>Majestic 0' . $id . '</td>
                            <td><a href="' . $linksp . '">' . $name_sp . '</a></td>
                            <td><a href="' . $linksp . '">' . $hinh . '</a></td>
                            <td><strong>' . $price_goc . '$</strong></td>
                            <td><strong>' . $price . '$</strong></td>
                            <td>' . $ngaynhap . '</td>
                            <td>' . $view . '</td>
                            <td>' . $mota . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                            <a href="' . $xoasp . '"><input type="button" value="Xóa"></a></td>
                        </tr>';
                };
            ?>
            <?php $soTrang = ceil($soSanPham/$sanPhamMoiTrang); ?>
            </tbody>
        </table>
        <div class="center">
        <?php
        echo '<div class="pagination">';
        echo '<a href="index.php?act=listsp&page=1" class="prev">&laquo; Previous</a>';
        for ($i = 1; $i <= $soTrang; $i++) {
            echo '<a href="index.php?act=listsp&page=' . $i . '" class="page-num">' . $i . '</a>';
        }
        echo '<a href="index.php?act=listsp&page=' . $soTrang . '" class="next">Next &raquo;</a>';
        echo '</div>';
        ?>
       </div>

        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
            <a href="index.php?act=addsp"><button>Thêm sản phẩm</button></a>
        </div></form>
    </section>
<style>
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
a {
    color: #333;
}
a:hover {
    color: #CCC;
}

</style>
