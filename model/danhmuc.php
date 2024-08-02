<?php 
function insert_danhmuc($tenloai){
    $sql="insert into danh_muc(name_dm) value('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="delete from danh_muc where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc($kyw = "") {
    $sql = "SELECT * FROM danh_muc WHERE 1";
    $params = array();
    if ($kyw !== "") {
        $sql .= " AND name LIKE ?";
        $params[] = "%" . $kyw . "%";
    }
    $sql .= " ORDER BY id DESC";
    $listdanhmuc = pdo_query($sql, ...$params);
    return $listdanhmuc;
    // biến được sử dụng để lưu trữ kết quả của truy vấn SQL
}


function loadone_danhmuc($id){
    $sql = "select * from danh_muc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "update danh_muc set name_dm='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}

?>