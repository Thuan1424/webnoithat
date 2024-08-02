<?php 
    if(is_array($bienthe)){
        extract($bienthe);
    }
?>
<header>
    <h1>Cập nhật Size sản phẩm</h1>
</header>

<section>
    <form action="index.php?act=updatebt&id=<?= $id ?>" method="post">
        <label for="se">Chọn sản phẩm</label>
        <select name="idsp">
                    <option  value="<?=$idsp?>"  selected>Tất cả</option>
                    <?php foreach($listsanpham as $sanpham): ?>
                    <option value="<?php echo $sanpham['id']; ?>"<?php echo ($bienthe['idsp'] == $sanpham['id']) ? ' selected' : ''; ?>><?php echo $sanpham['name_sp']; ?></option>
                    <?php endforeach; ?>
                </select>
        <br><br>
        <label for="">Chọn Size</label>
        <select name="idkt">
                    <option  value="<?=$idkt?>"  selected>Tất cả</option>
                    <?php foreach($listkichthuoc as $kichthuoc): ?>
                    <option value="<?php echo $kichthuoc['id']; ?>"<?php echo ($bienthe['idkt'] == $kichthuoc['id']) ? ' selected' : ''; ?>><?php echo $kichthuoc['name_kt']; ?></option>
                    <?php endforeach; ?>
                </select>
        <br><br>
        <label for="">Số lượng</label>
        <input type="number" name="so_luong" value="<?=$so_luong?>">
        <div class="actions"><br>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value="Cập nhật"><br><br>
            <input type="reset" value="Nhập lại"><br><br>
            <a href="index.php?act=listbt">Danh sách</a>
        </div>
        <?php 
            if(isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
        ?>
    </form>
</section>
