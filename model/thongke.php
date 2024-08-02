<?php 
  function loadall_thongke() {
    $sql = "SELECT dm.id AS madm, dm.name_dm AS tendm, COUNT(*) AS so_san_pham, SUM(hh.view) AS tong_luot_xem, SUM(hh.price) AS tong_gia_tri, SUM(hh.price) AS doanh_thu
    FROM hang_hoa hh
    INNER JOIN danh_muc dm ON hh.iddm = dm.id
    GROUP BY dm.id
    ORDER BY dm.id ASC";
    $listtk = pdo_query($sql);
    return $listtk;
  }
  function tong_gia_tri($listsanpham) {
    $tong_gia_tri = 0;
    foreach ($listsanpham as $sanpham) {
      $tong_gia_tri += $sanpham['price'];
    }
    return $tong_gia_tri;
  }
  function doanh_thu($tong_gia_tri) {
    return $tong_gia_tri;
  }

  //   function loadall_thongke(){
  //     $sql = "select danh_muc.id as madm, danh_muc.name_dm as tendm, count(hang_hoa.id) as countsp, min(hang_hoa.price) as minprice, max(hang_hoa.price) as maxprice, avg(hang_hoa.price) as avgprice from hang_hoa left join danh_muc on danh_muc.id = hang_hoa.iddm group by danh_muc.id order by danh_muc.id desc";
  //     $listtk=pdo_query($sql);
  //     return $listtk;
  // }
?>