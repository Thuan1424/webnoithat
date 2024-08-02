<?php 
    if(is_array($hinhanh)){
        extract($hinhanh);
    }
?>
<header>
    <h1>Cập nhật ảnh sản phẩm</h1>
</header>

<section>
    <form action="index.php?act=updateanh&id=<?= $id ?>" method="post" enctype="multipart/form-data">
        <label for="se">Chọn sản phẩm</label>
        <select name="idsp">
                    <option  value="<?=$idsp?>"  selected>Tất cả</option>
                    <?php foreach($listsanpham as $sanpham): ?>
                    <option value="<?php echo $sanpham['id']; ?>"<?php echo ($hinhanh['idsp'] == $sanpham['id']) ? ' selected' : ''; ?>><?php echo $sanpham['name_sp']; ?></option>
                    <?php endforeach; ?>
                </select>
        <br><br>

        <label for="hinh">Hình sản phẩm:</label>
        <?php if(isset($ten_anh) && !empty($ten_anh)): ?>
        <img src="../upload/<?= $ten_anh ?>" height="80" alt="Ảnh sản phẩm">
        <?php else: ?>
        <p>No photo</p>
        <?php endif; ?>
        <input type="file" name="ten_anh[]" multiple><br><br>

        <div class="actions"><br>
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" name="capnhat" value="Cập nhật"><br><br>
            <input type="reset" value="Nhập lại"><br><br>
            <a href="index.php?act=listanh">Danh sách</a>
        </div>
        <?php 
            if(isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
        ?>
    </form>
</section>
