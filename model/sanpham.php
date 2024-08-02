<?php    
function insert_sanpham($tensp,$giaspgoc,$giasp,$hinh,$ngaynhap,$mota,$iddm){
    $sql="insert into hang_hoa(name_sp,price_goc,price,img,ngaynhap,mota,iddm) value('$tensp','$giaspgoc','$giasp','$hinh','$ngaynhap','$mota','$iddm')";
    pdo_execute($sql);
}


function delete_sanpham($id){
    $sql="delete from hang_hoa where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_home() {
    $sql = "select * from hang_hoa where 1 order by id desc limit 0, 9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_moinhat() {
    $sql = "select * from hang_hoa where 1 order by ngaynhap desc limit 0, 8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10() {
    $sql = "select * from hang_hoa where 1 order by view desc ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0) {
    $sql = "select * from hang_hoa WHERE 1";
    $params = array();
    if ($kyw !== "") {
        $sql .= " AND name_sp LIKE ?";
        $params[] = "%" . $kyw . "%";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm = ?";
        $params[] = $iddm;
    }
    $sql .= " ORDER BY id ASC";
    $listsanpham = pdo_query($sql, ...$params);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danh_muc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name_dm;
    } else{
        return "";
    } 
}

function loadone_sanpham($id){
    $sql="select * from hang_hoa where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm){
    $sql = "select * from hang_hoa where iddm=".$iddm." AND id <> " . $id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$tensp,$giaspgoc,$giasp,$ngaynhap,$mota,$hinh){
    if($hinh!="")
        $sql = "update hang_hoa set iddm='".$iddm."', name_sp='".$tensp."',price_goc='".$giaspgoc."',price='".$giasp."',ngaynhap='".$ngaynhap."',mota='".$mota."',img='".$hinh."' where id=".$id;
    else
        $sql = "update hang_hoa set iddm='".$iddm."', name_sp='".$tensp."',price_goc='".$giaspgoc."',price='".$giasp."',ngaynhap='".$ngaynhap."',mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}

?>