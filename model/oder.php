
<?php

function tongdonhang(){
    $tong=0;
    foreach ($_SESSION['mycart'] as $i => $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
    }
    return $tong;    
}?>
<?php
function insert_bill($iduser, $user, $email, $address, $tel, $idpttt, $idptvc, $ngaydathang, $tongdonhang) {
    $sql = "INSERT INTO bill(iduser, bill_name, bill_email, bill_address, bill_tel, idpttt, idptvc, ngaydathang, total) 
            VALUES ('$iduser', '$user', '$email', '$address', '$tel', '$idpttt', '$idptvc', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertID($sql);
}
function get_ttdh($n){
    switch ($n) {
        case '0':
            $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
            break;
        case '3':
            $tt="Hoàn tất";
            break;
        case '4':
            $tt="Đã Hủy";
            break;
        
        default:
        $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
?>
<?php
function load_ten_pttt($idpttt){
if($idpttt>0){
    $sql="select * from pttt where id=".$idpttt;
    $pttt=pdo_query_one($sql);
    extract($pttt);
    return $name_pttt;
} else{
    return "";
} 
}
function loadall_bill($kyw="",$iduser=0){

    $sql = "select * from bill where 1;";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw=!"") $sql.=" AND id like='%".$iduser."%'";
    $sql.= "oder by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function load_ten_khachhang($iduser) {
    $sql = "SELECT * FROM khach_hang WHERE id = $iduser";
    $khachhang = pdo_query_one($sql);
    return $khachhang['user']; // Trả về tên khách hàng
}
function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}

function load_ten_ptvc($idptvc){
if($idptvc>0){
    $sql="select * from ptvc where id=".$idptvc;
    $ptvc=pdo_query_one($sql);
    extract($ptvc);
    return $nam_ptvc;
} else{
    return "";
} 
}
function delete_donhang($id) {
    $id = $_GET['id'];
// Xóa các dòng liên quan trong bảng cart
    $sql_delete_cart = "DELETE FROM cart WHERE idbill = $id";
    pdo_execute($sql_delete_cart);
// Sau đó xóa dòng trong bảng bill
    $sql_delete_bill = "DELETE FROM bill WHERE id = $id";
    pdo_execute($sql_delete_bill);
}
function update_bill_status($id, $new_status) {
    $sql = "UPDATE bill SET bill_status = $new_status WHERE id = $id";
    pdo_execute($sql);
}

?>