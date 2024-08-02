
    <header>
        <h1>Danh sách voucher</h1>
    </header>

    <section>
        <table>
            <thead>
                <tr>
                    <th>Chọn</th>
                    <th>Mã Voucher</th>
                    <th>Tên Voucher</th>
                    <th>Từ Ngày</th>
                    <th>Đến Ngày</th>
                    <th>Mệnh Giá</th>
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu voucher sẽ được thêm vào đây -->
                <tr>
                    <td><input type="checkbox"></td>
                    <td>VOUCHER001</td>
                    <td>Voucher 1</td>
                    <td>2023-01-01</td>
                    <td>2023-01-31</td>
                    <td>50,000 VND</td>
                    <td>Đã sử dụng</td>
                    <td class="actions">
                        <button onclick="sua()">Sửa</button>
                        <button onclick="xoa()">Xóa</button>
                    </td>
                </tr>
                <!-- Thêm các dòng voucher khác tại đây -->
            </tbody>
        </table>

        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
        </div>
    </section>
