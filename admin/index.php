<?php 
    session_start();
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/hinhanh.php";
    include "../model/kichthuoc.php";
    include "../model/binhluan.php";
    include "../model/taikhoan.php";
    include "../model/role.php";
    include "../model/cart.php";
    include "../model/bill.php";
    include "../model/oder.php";
    include "../model/thongke.php";
    
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
        case 'adddm':
            // kiểm tra người dùng có click vào nút add hay không 
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai=$_POST['tenloai']; 
                insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
            include "danhmuc/adddm.php";
            break;
        case 'listdm':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listdanhmuc = loadall_danhmuc($kyw);
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        case 'xoadm':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
            case 'suadm':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $dm = loadone_danhmuc($_GET['id']); 
                }
                include "danhmuc/update.php";
                break;                      
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        case 'addsp':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $iddm=$_POST['iddm']; 
                $tensp=$_POST['tensp'];
                $giaspgoc=$_POST['giaspgoc'];
                $giasp=$_POST['giasp'];
                $ngaynhap=$_POST['ngaynhap'];
                $mota=$_POST['mota'];
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (isset($_FILES['hinh']) && $_FILES['hinh']['name'] !== "") {
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                }else{
                    $hinh=" ";
                }
            }
                insert_sanpham($tensp,$giaspgoc, $giasp, $hinh, $ngaynhap, $mota, $iddm);
                $thongbao="Thêm thành công";
            }
            $listdanhmuc=loadall_danhmuc();
                //lấy danh sách các danh mục sản phẩm từ model
                include "sanpham/adddsp.php";
                break;
        case 'suasp':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $sanpham=loadone_sanpham($_GET['id']);
            }
            
            $listdanhmuc=loadall_danhmuc();
            include "sanpham/updatesp.php";
            break;        
        case 'updatesp':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm']; 
                $tensp=$_POST['tensp']; 
                $giaspgoc=$_POST['giaspgoc'];
                $giasp=$_POST['giasp'];
                $ngaynhap=$_POST['ngaynhap'];
                $mota=$_POST['mota']; 
                $hinh=$_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if(move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)){
                    //echo "The file". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has bee upload.";
                } else {
                    //echo "Sory";
                }
                update_sanpham($id,$iddm,$tensp,$giaspgoc,$giasp,$ngaynhap,$mota,$hinh);
                $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham();
            include "sanpham/listsp.php";
            break;
            case 'listsp':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/listsp.php";
                break;

                case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham();
                    include "sanpham/listsp.php";
                    break;
            case 'sanphamct':
                if(isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $id = $_GET['idsp'];
                    $onesp = loadone_sanpham($id);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                    include "../view/sanphamct.php";
                } else {
                    include "view/home.php";
                }
                break;
            case 'listanh':
                $ten_sanpham=loadall_sanpham();
                $listanh = loadall_anhsp();
                include "hinhanh/listanh.php";
                break;
            case 'addanh':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    if (isset($_POST['idsp']) && isset($_FILES['ten_anh'])) {
                        $idsp = $_POST['idsp'];
                        
                        // Duyệt qua mảng các file hình ảnh
                        $totalFiles = count($_FILES['ten_anh']['name']);
                        for ($i = 0; $i < $totalFiles; $i++) {
                            $ten_anh = $_FILES['ten_anh']['name'][$i];
                            $tmpFilePath = $_FILES['ten_anh']['tmp_name'][$i];
                            
                            // Kiểm tra xem file có được upload thành công hay không
                            if ($tmpFilePath != "") {
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($ten_anh);
                
                                // Thực hiện lưu trữ ảnh
                                if (move_uploaded_file($tmpFilePath, $target_file)) {
                                    insert_anh($idsp, $ten_anh);
                                    $thongbao = "Thêm thành công";
                                } else {
                                    $thongbao = "Không thể tải lên ảnh";
                                }
                            }
                        }
                    }
                }                
                $listsanpham = loadall_sanpham();
                include "hinhanh/addanh.php";
                break;
            case 'xoaanh':
                if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_anh($_GET['id']);
                }
                $listanh = loadall_anhsp();
                include "hinhanh/listanh.php";
                break;
            case 'suaanh':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $hinhanh=loadone_anh($_GET['id']);
                }
                
                $listsanpham=loadall_sanpham();
                include "hinhanh/updateanh.php";
                break;        
                case 'updateanh':
                    if(isset($_POST['capnhat']) && $_POST['capnhat']){
                        if(isset($_POST['id']) && isset($_POST['idsp']) && isset($_FILES['ten_anh'])) {
                            $id = $_POST['id'];
                            $idsp = $_POST['idsp'];
                            $ten_anh = $_FILES['ten_anh']['name'][0]; // Giả sử chỉ upload 1 file
                
                            $tmpFilePath = $_FILES['ten_anh']['tmp_name'][0];
                            if($tmpFilePath != "") {
                                $target_dir = "../upload/";
                                $target_file = $target_dir . basename($ten_anh);
                
                                // Thực hiện lưu trữ ảnh
                                if(move_uploaded_file($tmpFilePath, $target_file)) {
                                    update_anh($id, $idsp, $ten_anh);
                                    $thongbao = "Cập nhật ảnh thành công";
                                } else {
                                    $thongbao = "Không thể tải lên ảnh";
                                }
                            }
                        }
                    }
                    $listanh = loadall_anhsp();
                    include "hinhanh/listanh.php";
                    break;
  
        case 'listtk':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;
        case 'xoatk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            $listrole= loadall_role();
            include "taikhoan/listtk.php";
            break;
        case 'suatk':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $taikhoan = loadone_taikhoan($_GET['id']);
            }
            $listrole=loadall_role();
            include "taikhoan/updatetk.php";
            break;
        case 'updatetk':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $idrole=$_POST['idrole'];
                update_role($id,$idrole);
            }
                $listrole=loadall_role();
                $listtaikhoan=loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;
        case 'listbl': 
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/listbl.php";
            break;
        case 'xoabl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/listbl.php";
            break;
        case 'listbt':
            $ten_sanpham=loadall_sanpham();
            $ten_kichthuoc=loadall_kichthuoc();
            $listbienthe = loadall_bienthe();
            include "bienthe/listbt.php";
            break;
        case 'addbt':
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $idsp=$_POST['idsp']; 
                $idkt=$_POST['idkt'];
                $so_luong=$_POST['so_luong']    ;
                insert_bienthe($idsp,$idkt,$so_luong);
                $thongbao="Thêm thành công";
            }
            $listsanpham=loadall_sanpham();
            $listkichthuoc=loadall_kichthuoc();
                //lấy danh sách các danh mục sản phẩm từ model
                include "bienthe/addbt.php";
                break;
        case 'xoabt':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bienthe($_GET['id']);
            }
            $listbienthe = loadall_bienthe();
            include "bienthe/listbt.php";
            break;
        case 'suabt':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $bienthe=loadone_bienthe($_GET['id']);
            }
            $listsanpham=loadall_sanpham();
            $listkichthuoc=loadall_kichthuoc();
            include "bienthe/updatebt.php";
            break;        
        case 'updatebt':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $id=$_POST['id'];
                $idsp=$_POST['idsp']; 
                $idkt=$_POST['idkt']; 
                $so_luong=$_POST['so_luong'];
                update_bienthe($id,$idsp,$idkt,$so_luong);
                $thongbao="Cập nhật thành công";
                }
                $listsbienthe=loadall_bienthe();
            include "bienthe/listbt.php";
            break;
        case 'listdh':
            $listbill=loadall_bill($_SESSION['user']['id']);
            include "bill/listbill.php";
            break;
        case 'suabill':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill = loadone_bill($_GET['id']);
            }
            include "bill/updatebill.php";
            break;
            
        case 'updatesuadh':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $id = $_POST['id'];
                $new_status = $_POST['new_status'];                
                // Cập nhật trạng thái đơn hàng trong cơ sở dữ liệu
                update_bill_status($id, $new_status);
                $thongbao = "Cập nhật trạng thái đơn hàng thành công";
            }
            $listbill = loadall_bill();
            include "bill/listbill.php";
            break;
        case 'xoabill':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_donhang($_GET['id']);
            }
            $listbill = loadall_bill();
            include "bill/listbill.php";
            break;
        case 'thongke':
            $listthongke = loadall_thongke();
            include "./thongke/thongke.php";
            break;
        case 'bieudo': 
            $listthongke = loadall_thongke();
            include "./thongke/bieudo.php";
            break;
        case 'addvc': 
            include "./voucher/addvc.php";
            break;
        case 'listvc': 
            include "./voucher/listvc.php";
            break;
        default:
            $listthongke = loadall_thongke();
            include "home.php";
            break;
        }
    }else{
        $listthongke = loadall_thongke();
        include "home.php";
    }
    include "footer.php";
?>