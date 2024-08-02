
   

    <section><header>
        <h1>Thêm sản phẩm mới</h1>
    </header>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <label for="se">Chọn danh mục</label>
        <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listdanhmuc as $danhmuc): ?>
                    <option value="<?= $danhmuc['id'] ?>"><?= $danhmuc['name_dm'] ?></option>
                <?php endforeach; ?>
            </select>
        <br><br>
        <label for="ten-loai">Tên sản phẩm:</label>
        <input type="text" id="ten-loai" name="tensp"><br><br>

        <label for="gia">Giá gốc:</label>
        <input type="number" id="price_goc" name="giaspgoc"><br><br>

        <label for="gia">Giá sản phẩm:</label>
        <input type="number" id="price " name="giasp"><br><br>


        <label for="hinh">Hình sản phẩm:</label>
        <input type="file" name="hinh"><br><br>


        <label for="ngaynhap">Ngày nhập:</label>
        <input type="date" name="ngaynhap" id="ngaynhap"><br><br>
        

        <label for="mota">Mô tả sản phẩm:</label><br>
        <textarea name="mota" cols="100" rows="10"></textarea><br><br>

        <div class="actions"><br>
        <input type="submit" name="themmoi" value="Thêm mới"><br><br>
                <input type="reset" value="Nhập lại"><br><br>
            <a href="index.php?act=listsp">Danh sách</a>
        </div>
        <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </section>

