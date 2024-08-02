


    <section><header>
        <h1>Thêm Size sản phẩm</h1>
    </header>
        <form action="index.php?act=addbt" method="post">
        <label for="se">Chọn sản phẩm</label>
        <select name="idsp">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listsanpham as $sanpham): ?>
                    <option value="<?= $sanpham['id'] ?>"><?= $sanpham['name_sp'] ?></option>
                <?php endforeach; ?>
            </select>
        <br><br>

        <label for="se">Chọn Size sản phẩm</label>
        <select name="idkt">
                <option value="0" selected>Tất cả</option>
                <?php foreach($listkichthuoc as $kichthuoc): ?>
                    <option value="<?= $kichthuoc['id'] ?>"><?= $kichthuoc['name_kt'] ?></option>
                <?php endforeach; ?>
            </select>
        <br><br>

        <label for="">Số lượng sản phẩm:</label>
        <input type="number" name="so_luong"><br><br>

        <div class="actions"><br>
        <input type="submit" name="themmoi" value="Thêm mới"><br><br>
                <input type="reset" value="Nhập lại"><br><br>
            <a href="index.php?act=listbt">Danh sách</a>
        </div>
        <?php 
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </section>

