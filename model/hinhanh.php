<?php 
function loadall_anhsp(){
    $sql="select * from anh_sp order by id desc";
    $listanh=pdo_query($sql);
    return $listanh;
}
function load_ten_sanpham($idsp){
    if($idsp>0){
        $sql="select * from hang_hoa where id=".$idsp;
        $sp=pdo_query_one($sql);
        extract($sp);
        return $name_sp;
    } else{
        return "";
    } 
}
function insert_anh($idsp,$ten_anh){
    $sql="insert into anh_sp(idsp,ten_anh) value('$idsp','$ten_anh')";
    pdo_execute($sql);
}
function delete_anh($id){
    $sql="delete from anh_sp where id=".$id;
    pdo_execute($sql);
}
function loadone_anh($id){
    $sql="select * from anh_sp where id=".$id;
    $anh=pdo_query_one($sql);
    return $anh;
}
function update_anh($id, $idsp, $ten_anh){
    if($ten_anh !== ""){
        $sql = "UPDATE anh_sp SET idsp = '$idsp', ten_anh = '$ten_anh' WHERE id = $id";
    } else {
        $sql = "UPDATE anh_sp SET idsp = '$idsp' WHERE id = $id";
    }
    pdo_execute($sql);
}

function load_all_images_of_product($idsp){
    $sql="SELECT * FROM anh_sp WHERE idsp=".$idsp;
    $list_anh = pdo_query($sql);
    return $list_anh;
}

?>