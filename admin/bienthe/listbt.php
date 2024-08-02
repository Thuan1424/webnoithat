
<section>
<header>
        <h1>Danh sách biến thể</h1>
</header>
<form action="#" method="post">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Mã biến thể</th>
                <th>Tên sản phẩm</th>
                <th>Size sản phẩm</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (isset($listbienthe) && is_array($listbienthe)) {
            foreach ($listbienthe as $bienthe) {
                extract($bienthe);
                $suabt = "index.php?act=suabt&id=" . $id;
                $xoabt = "index.php?act=xoabt&id=" . $id;
                // Load tên sản phẩm dựa trên id sản phẩm từ hàm load_ten_sanpham
                $ten_sanpham = load_ten_sanpham($idsp);
                $ten_kichthuoc = load_ten_kichthuoc($idkt);
            
                echo '
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>Majestic 0' . $id . '</td>
                        <td>' . $ten_sanpham . '</td>
                        <td>' . $ten_kichthuoc . '</td>
                        <td>' . $so_luong . '</td>
                        <td>
                            <a href="' . $suabt . '"><input type="button" value="Sửa"></a>
                            <a href="' . $xoabt . '"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
            }
        } else {
            echo'<a href="index.php?act=listbt">ok</a>';
            
        }
        ?>

        </tbody>
    </table>
</form>
    <div class="table-actions">
        <button onclick="chonTatCa()">Chọn tất cả</button>
        <button onclick="xoaTatCa()">Xóa tất cả</button>
        <a href="index.php?act=addbt"><button>Thêm biến thể</button></a>
    </div>
</section>