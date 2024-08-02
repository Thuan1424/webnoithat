
<section>
<header>
        <h1>Danh sách hình ảnh</h1>
</header>
<form action="index.php?act=listanh" method="post"enctype="multipart/form-data">
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Mã ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Đường dẫn ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        <?php
           
           foreach ($listanh as $anh) {
            extract($anh);
            $suaanh = "index.php?act=suaanh&id=" . $id;
            $xoaanh = "index.php?act=xoaanh&id=" . $id;
            $hinhpath = "../upload/" . $ten_anh; // Tên cột chứa đường dẫn ảnh
        
            if (is_file($hinhpath)) {
                $ten_anh_html = "<img src='" . $hinhpath . "' height='120'>";
            } else {
                $ten_anh_html = "No photo";
            }
        
            // Load tên sản phẩm dựa trên id sản phẩm từ hàm load_ten_sanpham
            $ten_sanpham = load_ten_sanpham($idsp);
        
            echo '
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>Majestic 0' . $id . '</td>
                    <td>' . $ten_sanpham . '</td>
                    <td>' . $ten_anh_html . '</td>
                    <td>
                        <a href="' . $suaanh . '"><input type="button" value="Sửa"></a>
                        <a href="' . $xoaanh . '"><input type="button" value="Xóa"></a>
                    </td>
                </tr>';
        }
        
        ?>

        </tbody>
    </table>
</form>
    <div class="table-actions">
        <button onclick="chonTatCa()">Chọn tất cả</button>
        <button onclick="xoaTatCa()">Xóa tất cả</button>
        <a href="index.php?act=addanh"><button>Thêm ảnh</button></a>
    </div>
</section>