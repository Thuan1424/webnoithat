<?php
    function loadall_pttt(){
        $sql="select * from pttt order by id desc";
        $listpttt=pdo_query($sql);
        return $listpttt;
    }
    function loadone_pttt($id) {
        $sql = "select * from pttt WHERE id = $id";
        $pttt = pdo_query_one($sql);
        return $pttt;
    }
    function loadall_ptvc(){
        $sql="select * from ptvc order by id desc";
        $listptvc=pdo_query($sql);
        return $listptvc;
    }
    function loadone_ptvc($id) {
        $sql = "select * from ptvc WHERE id = $id";
        $ptvc = pdo_query_one($sql);
        return $ptvc;
    }
?>