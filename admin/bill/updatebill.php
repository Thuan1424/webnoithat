<section>
<header>
    <h1>Cập nhật trạng thái đơn hàng</h1>
</header>
    <form action="index.php?act=updatesuadh" method="post">
        <input type="hidden" name="id" value="<?php echo $bill['id']; ?>">
        <div class="bill_status">
            <label for="new_status">Trạng thái đơn hàng:</label>
            <select name="new_status" id="new_status">
                <option value="0" <?php echo ($bill['bill_status'] == 0) ? "selected" : ""; ?>>Đơn hàng mới</option>
                <option value="1" <?php echo ($bill['bill_status'] == 1) ? "selected" : ""; ?>>Đang xử lý</option>
                <option value="2" <?php echo ($bill['bill_status'] == 2) ? "selected" : ""; ?>>Đang giao hàng</option>
                <option value="3" <?php echo ($bill['bill_status'] == 3) ? "selected" : ""; ?>>Hoàn tất</option>
                <option value="4" <?php echo ($bill['bill_status'] == 4) ? "selected" : ""; ?>>Hủy đơn hàng</option>
            </select><br><br>
        <div class="inp">
            <input type="submit" name="capnhat" value="Cập nhật">
        </div>
    </form>
</div>
</section>
<style>
    .bill_status {
    margin-bottom: 20px; /* Khoảng cách giữa phần bill_status và các phần tử khác */
}
</style>