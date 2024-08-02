


    <section><header>
        <h1>Thêm sản phẩm mới</h1>
    </header>
        <form action="index.php?act=addanh" method="post" enctype="multipart/form-data">
        <label for="se">Chọn sản phẩm</label>
        <select name="idsp">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listsanpham as $sanpham): ?>
                    <option value="<?= $sanpham['id'] ?>"><?= $sanpham['name_sp'] ?></option>
                <?php endforeach; ?>
            </select>
        <br><br>

        <label for="hinh">Hình sản phẩm:</label>
        <!-- <input type="file" name="ten_anh"><br><br> -->
        <input type="file" name="ten_anh[]" multiple><br><br>

        <div class="actions"><br>
        <input type="submit" name="themmoi" value="Thêm mới"><br><br>
                <input type="reset" value="Nhập lại"><br><br>
            <a href="index.php?act=listanh">Danh sách</a>
        </div>
        <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </section>

