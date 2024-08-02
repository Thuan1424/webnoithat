<?php
    function loadall_role(){
        $sql="select * from role order by id desc";
        $listrole=pdo_query($sql);
        return $listrole;
    }
    function loadone_role($id) {
        $sql = "select * from role WHERE id = $id";
        $role = pdo_query_one($sql);
        return $role;
    }
?>