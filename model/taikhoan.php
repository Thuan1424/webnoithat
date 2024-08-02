<?php 
function loadall_taikhoan(){
    $sql="select * from khach_hang order by id  desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($user, $pass,$email,$address,$tel,$avatar){
    $sql = "insert into khach_hang(user, pass, email, address, tel, avatar) values ('$user', '$pass','$email','$address','$tel','$avatar')";
    pdo_execute($sql);
}

function checkuser($user, $pass){
    $sql = "select * from khach_hang where user='$user' AND pass='$pass'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email){
    $sql = "select * from khach_hang where email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id, $user, $email, $address, $tel){
    $sql = "update khach_hang set user='$user', email='$email', address='$address', tel='$tel' where id=$id";
    pdo_execute($sql);
}

function loadone_taikhoan($id) {
    $sql = "SELECT * FROM khach_hang WHERE id = $id";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}

function delete_taikhoan($id) {
    $sql = "DELETE FROM khach_hang WHERE id = $id";
    pdo_execute($sql);
}
function load_ten_role($idrole){
    if($idrole>0){
        $sql="select * from role where id=".$idrole;
        $role=pdo_query_one($sql);
        extract($role);
        return $name_role;
    } else{
        return "";
    } 
}
function update_role($id, $idrole){
    $sql = "update khach_hang set idrole='$idrole'where id=$id";
    pdo_execute($sql);
}

function generateRandomPassword($length = 10) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    return substr(str_shuffle($chars), 0, $length);
}
function updatePassword($userId, $newPassword) {
    $sql = "UPDATE khach_hang SET pass='$newPassword' WHERE id=$userId";
    pdo_execute($sql);
}

?>
