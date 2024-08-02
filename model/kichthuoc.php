<?php 
function loadall_bienthe(){
    $sql="select * from bien_the order by id desc";
    $listbienthe=pdo_query($sql);
    return $listbienthe;
}
function loadall_kichthuoc(){
    $sql="select * from kich_thuoc order by id desc";
    $listkichthuoc=pdo_query($sql);
    return $listkichthuoc;
}
function load_ten_kichthuoc($idkt){
    if($idkt>0){
        $sql="select * from kich_thuoc where id=".$idkt;
        $kt=pdo_query_one($sql);
        extract($kt);
        return $name_kt;
    } else{
        return "";
    } 
}
function insert_bienthe($idsp,$idkt,$so_luong){
    $sql="insert into bien_the(idsp,idkt,so_luong) value('$idsp','$idkt','$so_luong')";
    pdo_execute($sql);
}
function delete_bienthe($id){
    $sql="delete from bien_the where id=".$id;
    pdo_execute($sql);
}
function loadone_bienthe($id){
    $sql="select * from bien_the where id=".$id;
    $bienthe=pdo_query_one($sql);
    return $bienthe;
}
function update_bienthe($id,$idsp,$idkt,$so_luong){
    $sql = "update bien_the set idsp = '$idsp', idkt = '$idkt', so_luong = '$so_luong' WHERE id = $id";  
    pdo_execute($sql);
}
function loadall_kichthuoc_by_idsp($idsp){
    $sql="SELECT kt.name_kt
          FROM bien_the bt
          INNER JOIN kich_thuoc kt ON bt.idkt = kt.id
          WHERE bt.idsp = $idsp";
    $listkichthuoc=pdo_query($sql);
    return $listkichthuoc;
}

?>