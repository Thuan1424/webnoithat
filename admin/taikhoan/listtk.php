 

<section><header>
    <h1>Danh sách tài khoản</h1>
</header>  
    <form action="#" method="post">
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>User Name</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Ảnh</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listtaikhoan as $taikhoan) : ?>
                    <?php
                    extract($taikhoan);
                    $suatk = "index.php?act=suatk&id=" . $id;
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    $hinhpath = "../upload/" . $avatar;
                    if (is_file($hinhpath)) {
                        $avatar = "<img src='" . $hinhpath . "' height='50'>";
                    } else {
                        $avatar = "no photo";
                    }
                    ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $id ?></td>
                        <td><?= $user ?></td>
                        <td><?= $pass ?></td>
                        <td><?= $email ?></td>
                        <td><?= $avatar ?></td>
                        <td><?= $address ?></td>
                        <td><?= $tel ?></td>
                        <td><?= $idrole ?></td>
                        <td>
                            <a href="<?= $suatk ?>"><input type="button" value="Quyền"></a><br><br>
                            <a href="<?= $xoatk ?>"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="table-actions">
            <button onclick="chonTatCa()">Chọn tất cả</button>
            <button onclick="xoaTatCa()">Xóa tất cả</button>
        </div>
    </form>
</section>
<style>
    section {
    width: 100%;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    table-layout: fixed;
}

th, td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ddd;
    word-wrap: break-word;
}

th {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

tbody tr:hover {
    background-color: #f2f2f2;
}
</style>