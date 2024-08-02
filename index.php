<?php
session_start();
include "view/header.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/role.php";
include "model/kichthuoc.php";
include "model/hinhanh.php";
include "model/cart.php";
include "model/bill.php";
include "model/oder.php";
include "model/viewcart.php";
include "model/pttt_ptvc.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$dspttt = loadall_pttt();
$dsptvc = loadall_ptvc();
$dsrole = loadall_role();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
$listsanpham_moinhat = loadall_sanpham_moinhat();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
	$act = $_GET['act'];
	switch ($act) {
		case 'sanpham':
			if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
				$kyw = $_POST['kyw'];
			} else {
				$kyw = "";
			}
			if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
				$iddm = $_GET['iddm'];
			} else {
				$iddm = 0;
			}
			$dssp = loadall_sanpham($kyw, $iddm);
			$tendm = load_ten_dm($iddm);
			include "view/sanpham.php";
			break;
		case 'sanphamct':
			if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
				$id = $_GET['idsp'];
				$onesp = loadone_sanpham($id);
				extract($onesp);
				$sp_cung_loai = load_sanpham_cungloai($id, $iddm);
				include "view/sanphamct.php";
			} else {
				include "view/home.php";
			}
			break;

		case 'gioithieu':
			include "view/gioithieu.php";
			break;
		case 'lienhe':
			include "view/lienhe.php";
			break;
		case 'baiviet':
			include "view/baiviet.php";
			break;
		case 'dangky':
			$thongbao1 = [];
			$thongbao2 = [];
			$thongbao3 = [];
			$thongbao4 = [];
			$thongbao5 = [];
			if (isset($_POST['dangky'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$email = $_POST['email'];
				$add = $_POST['add'];
				$tel = $_POST['tel'];

				// Xử lý upload ảnh
				if ($_FILES['avatar']['name'] != "") {
					$target_dir = "upload/"; // Thư mục để lưu trữ ảnh
					$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
					// Di chuyển ảnh từ thư mục tạm lên thư mục lưu trữ
					if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
						// Lưu đường dẫn của ảnh vào biến $avatar_path
						$avatar_path = $target_file;
						// Sau đó, bạn có thể lưu đường dẫn $avatar_path vào cơ sở dữ liệu
						insert_taikhoan($user, $pass, $email, $add, $tel, $avatar_path, $idrole);
						$thongbao = "Đã đăng ký thành công. Thật tuyệt vời giờ bạn có thể đăng nhập";
						header('location:index.php?act=dangnhap');
					} else {
						$thongbao = "Không thể upload ảnh. Vui lòng thử lại!";
					}
				} else {
					$thongbao = "Bạn chưa chọn ảnh đại diện";
				}

				if (empty($thongbao1)) {
					$thongbao1['user'] = "Vui lòng nhập tên đăng nhập";
				}
				if (empty($thongbao2)) {
					$thongbao2['pass'] = "Vui lòng nhập mật khẩu";
				}
				if (empty($thongbao3)) {
					$thongbao3['email'] = "Vui lòng nhập email";
				}
				if (empty($thongbao4)) {
					$thongbao4['add'] = "Vui lòng nhập địa chỉ";
				}
				if (empty($thongbao5)) {
					$thongbao5['tel'] = "Vui lòng nhập điện thoại";
				}
			}

			include "view/dangky.php";
			break;
		case 'dangnhap':
			$thongbao1 = [];
			$thongbao2 = [];
			if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$checkuser = checkuser($user, $pass);
				if (is_array($checkuser)) {
					$_SESSION['user'] = $checkuser;
					header('location:index.php');
				}
				if (empty($thongbao1)) {
					$thongbao1['user'] = "Vui lòng nhập tài khoản";
				}
				if (empty($thongbao2)) {
					$thongbao2['pass'] = "Vui này nhập mật khẩu";
				} else {
					echo "Bạn đã nhập sai";
				}
			}
			include "view/dangnhap.php";
			break;
		case 'updatetk':
			if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
				$user = $_POST['user'];
				$email = $_POST['email'];
				$address = $_POST['add'];
				$tel = $_POST['tel'];
				update_taikhoan($id, $user, $email, $address, $tel);
				$_SESSION['user'] = checkuser($user, $pass);
				header('location: index.php');
			} else {
				$thongbao = "Đã cập nhật thông tin thành công";
			}
			include "view/updatetk.php";
			break;
		case 'quenmk':
			if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
				$email = $_POST['email'];
				$checkemail = checkemail($email);
				if (is_array($checkemail)) {
					// Tạo mật khẩu mới ngẫu nhiên
					$newPassword = generateRandomPassword(); // Hàm tạo mật khẩu mới ngẫu nhiên
					// Mã hóa mật khẩu mới
					$hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
					// Cập nhật mật khẩu mới vào cơ sở dữ liệu
					$userId = $checkemail['id']; // Lấy ID của người dùng từ cơ sở dữ liệu
					updatePassword($userId, $hashedPassword); // Hàm cập nhật mật khẩu mới vào cơ sở dữ liệu
					$thongbao = "Mật khẩu mới của bạn là: $hashedPassword ";
				} else {
					$thongbao = "Email này không tồn tại!";
				}
			}
			include "view/quenmk.php";
			break;

		case 'addtocart':
			if (isset($_POST['addtocart']) && $_POST['addtocart']) {
				$id = $_POST['id'];
				$name_sp = $_POST['name_sp'];
				$img = $_POST['img'];
				$price = $_POST['price'];
				$size = $_POST['size'];
				// Cập nhật thông tin kích thước vào sản phẩm
				$soluong = 1;
				$ttien = $soluong * $price;
				$spadd = [$id, $name_sp, $img, $price, $soluong, $ttien, $size];

				// Thêm sản phẩm vào giỏ hàng
				$_SESSION['mycart'][] = $spadd;
				include "view/cart/giohang.php";
			}
			break;
		case 'delcart':
			if (isset($_GET['idcart'])) {
				$idcart = $_GET['idcart'];
				if (isset($_SESSION['mycart'][$idcart])) {
					array_splice($_SESSION['mycart'], $idcart, 1);
				}
			} else {
				$_SESSION['mycart'] = []; //gán giá trị rỗng
			}
			header('Location: index.php?act=viewcart');
			break;
		case 'viewcart':
			include "view/cart/giohang.php";
			break;
		case 'billcomfirm':
			if (!isset($_SESSION['user'])) {
				$message = "CLICK ĐỂ ĐĂNG NHẬP MỚI THỰC HIỆN ĐƯỢC CHỨC NĂNG NÀY";
				echo '<h1><a href="index.php?act=dangnhap"><div class="alert alert-warning">' . $message . '</div></a></h1> ';
			} else {
				if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
					if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id'];
					else $id = 0;
					$user = $_POST['user'];
					$email = $_POST['email'];
					$address = $_POST['address'];
					$tel = $_POST['tel'];
					$idpttt = $_POST['idpttt'];
					$idptvc = $_POST['idptvc'];
					$ngaydathang = date('h:i:sa d/m/Y');
					$tongdonhang = tongdonhang();
					//tạo bill
					$idbill = insert_bill($iduser, $user, $email, $address, $tel, $idpttt, $idptvc, $ngaydathang, $tongdonhang);

					foreach ($_SESSION['mycart'] as $cart) {
						insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $cart[6], $idbill);
					}
					//xóa session cart
					unset($_SESSION['mycart']);
				}
			}
			$listbill = loadall_bill($_SESSION['user']['id']);
			$bill = loadone_bill($idbill);
			$billct = loadall_cart($idbill);
			include "view/ktdonhang.php";
			break;
		case 'bill':
			$listpttt = loadall_pttt();
			$listptvc = loadall_ptvc();
			include "view/cart/bill.php";
			break;
			// case 'deletedh':
			// 	if(isset($_GET['id']) && !empty($_GET['id'])) {
			// 		$id = $_GET['id'];
			// 		delete_donhang($id);
			// 		header('Location: index.php?act=ktdonhang');
			// 		exit;
			// 	} else {
			// 		echo 'ID đơn hàng không hợp lệ';
			// 	}
			// 	break;
		case 'huydh':
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				$bill = loadone_bill($_GET['id']);
			}
			include "view/huydh.php";
			break;
		case 'xlhuydh':
			if (isset($_POST['capnhat']) && $_POST['capnhat']) {
				$id = $_POST['id'];
				$new_status = $_POST['new_status'];
				// Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
				update_bill_status($id, $new_status);
				$thongbao = "Cập nhật trạng thái đơn hàng thành công";
			}
			$listbill = loadall_bill();
			header('Location: index.php?act=ktdonhang');
			break;
		case 'dangxuat':
			session_unset();
			header('location:index.php');
			break;
		case 'user':
			$listbill = loadall_bill($_SESSION['user']['id']);
			include "view/user.php";
			break;
		case 'thanhtoan':
			include "view/thanhtoan.php";
			break;
		case 'trogiup':
			include "view/trogiup.php";
			break;
		case 'htdathang':
			include "view/htdathang.php";
			break;
		case 'ktdonhang':
			$listbill = loadall_bill($_SESSION['user']['id']);
			include "view/ktdonhang.php";
			break;
		case 'baivietct':
			include "view/baivietct.php";
			break;
		default:
			include "view/home.php";
			break;
	}
} else {
	include "view/home.php";
}
include "view/foooter.php";
