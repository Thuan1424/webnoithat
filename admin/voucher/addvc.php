
    <header>
        <h1>Thêm Mã Voucher</h1>
    </header>

    <section>
        <label for="voucherCode">Mã Voucher:</label>
        <input type="text" id="voucherCode" placeholder="Nhập Mã Voucher">

        <label for="voucherName">Tên Voucher:</label>
        <input type="text" id="voucherName" placeholder="Nhập Tên Voucher">

        <label for="startDate">Ngày Bắt Đầu:</label>
        <input type="date" id="startDate">

        <label for="endDate">Ngày Kết Thúc:</label>
        <input type="date" id="endDate">

        <label for="mota">Mô tả :</label><br>
        <textarea name="mota" cols="50" rows="5"></textarea>

        <div class="actions"><br>
            <button onclick="themMoi()" type="submit">Thêm mới</button>
            <button type="reset">Nhập lại</button>
            <a href="index.php?act=listvc">Danh sách</a>
        </div>
    </section>

