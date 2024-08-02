<style>
		/* Định dạng cho bảng */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

/* Định dạng cho các thẻ <th> */
th {
  background-color: #f2f2f2;
  text-align: left;
  padding: 8px;
}

/* Định dạng cho các hàng lẻ và chẵn */
tr:nth-child(even) {
  background-color: #f9f9f9;
}

tr:nth-child(odd) {
  background-color: #ffffff;
}

/* Định dạng cho các ô dữ liệu */
td {
  padding: 8px;
}

</style>

</head>
<?php 
    session_start();
    // xác định người dùng đang đăng nhập. 
    //Mỗi bình luận cũng có một trường ID người dùng để biết người đã đăng bình luận.

    include "../model/pdo.php";
    include "../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    //lấy giá trị của tham số idpro từ request
    $dsbl=loadall_binhluan($idpro);
    //tải danh sách bình luận lq đến sản phẩm có idpro tương ứng

?>
<body>
    <div class="container margin_60_35">

        <div class="row justify-content-center">
            <div class="col-lg-8">
			<div class="">
				<div class="in">
					<table>
					<tr class="">
						<th>Nội Dung Bình Luận</th>
						<th>Khách hàng</th>
						<th>Ngày</th>
					</tr>
					<?php 
					foreach ($dsbl as $bl) {
						extract($bl);
						$ten_nguoi_dung = getTenNguoiDung($iduser); // Hàm để lấy tên người dùng từ bảng khach_hang
						echo '<tr><td>'.$noi_dung.'</td>';
						echo '<td>'.$ten_nguoi_dung.'</td>';
						echo '<td>'.$ngay_bl.'</td></tr>';
					}
					?>
					</table>
				</div>
				</div>
					<div class="form-group">
					<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                    <input type="hidden" name="idpro" value="<?=$idpro?>">
                        <input type="text" name="noi_dung" class="form-control"><br>
                        <div class="write_review">
                <label class="container_check">Bạn đồng ý xác nhận chịu trách nhiệm với phát ngôn của mình chứ?
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
            
						<input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn_1">
                    </div>
                   
                </div>
				</form>
            </div>
			<?php
				if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
					$noi_dung=$_POST['noi_dung'];
					$idpro=$_POST['idpro'];
					$iduser=$_SESSION['user']['id'];
					date_default_timezone_set('Asia/Ho_Chi_Minh');
					$ngay_bl = date('H:i d/m/Y');
					insert_binhluan($noi_dung, $iduser, $idpro, $ngay_bl);
					header("Location: ".$_SERVER['HTTP_REFERER']);
					}      
				?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    </main>
    <!--/main-->