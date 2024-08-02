<?php 
if(is_array($dm)){
    extract($dm);
}
?>
<header>
    <h1>Cập nhật danh mục mới</h1>
</header>

<section>
    <form action="index.php?act=updatedm" method="post">
        <label for="ma-loai">Mã loại:</label>
        <input type="text" name="maloai">

        <label for="ten-loai">Tên loại:</label>
        <input type="text" name="tenloai" value="<?php if(isset($dm['name_dm'])) echo $dm['name_dm']; ?>">

        <div class="actions"><br>
            <input type="hidden" name="id" value="<?php if(isset($id)) echo $id;?>">
            <input type="submit" name="capnhat" value="Cập nhật"><br><br>
            <input type="reset" value="Nhập lại" ><br><br>
            <a href="index.php?act=listdm">Danh sách</a>
        </div>

        <?php 
        if(isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
        ?>
    </form>
</section>
