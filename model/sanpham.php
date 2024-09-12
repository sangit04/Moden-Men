<?php
function insert_sanpham($id_dm, $ten_sp, $anh_sp, $so_luong,  $thong_tin_sp, $mau_sac, $trang_thai, $gia_sp)
{

  $sql = "insert into tb_san_pham(id_dm, ten_sp, anh_sp, so_luong,  thong_tin_sp, mau_sac,trang_thai, gia_sp) values('$id_dm','$ten_sp','$anh_sp','$so_luong','$thong_tin_sp','$mau_sac','$trang_thai','$gia_sp')";
  pdo_execute($sql);
}

function delete_sanpham($id_sp)
{
  $sql = "delete from tb_san_pham where id_sp=" . $_GET['id_sp'];
  pdo_execute($sql);
}
function loadall_sanpham_top4()
{
  $sql = "SELECT * FROM tb_san_pham order by luot_xem desc limit 0,4";
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}
function loadall_sanpham_top5()
{
  $sql = "SELECT * FROM tb_san_pham order by luot_xem desc limit 0,5";
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}
function loadall_sanpham_top1()
{
  $sql = "SELECT * FROM tb_san_pham order by luot_xem desc limit 0,1";
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}
function loadall_sanpham_home()
{
  $sql = "SELECT * FROM tb_san_pham where 1 order by id_sp limit 0,9";
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}

function loadall_sanpham($kyw = "", $id_dm = 0)
{
  $sql = "SELECT * FROM tb_san_pham WHERE 1";

  // Nếu có từ khóa, thêm điều kiện tìm kiếm
  if (!empty($kyw)) {
    $sql .= " AND ten_sp LIKE '%" . $kyw . "%'";
  }
  if ($id_dm > 0) {
    $sql .= " AND id_dm = '" . $id_dm . "'";
  }
  $sql .= " ORDER BY id_sp DESC";

  $listsanpham = pdo_query($sql);
  return $listsanpham;
}
function kyw_sanpham($kyw = "")
{
  $sql = "SELECT * FROM tb_san_pham WHERE 1";

  // Nếu có từ khóa, thêm điều kiện tìm kiếm
  if (!empty($kyw)) {
    $sql .= " AND ten_sp LIKE '%" . $kyw . "%'";
  }

  // Sắp xếp sản phẩm theo ID giảm dần
  $sql .= " ORDER BY id_sp DESC";

  // Thực thi câu truy vấn và trả về kết quả
  $listsanpham = pdo_query($sql);

  return $listsanpham;
}



function loadone_sanpham($id_sp)
{
  $sql = "select * from tb_san_pham where id_sp=" . $id_sp;
  $tb_san_pham = pdo_query_one($sql);
  return $tb_san_pham;
}

function load_sanpham_cungloai($id_sp, $id_dm)
{
  $sql = "select * from tb_san_pham where id_dm=" . $id_dm . " AND id_sp <>" . $id_sp;
  $listsanpham = pdo_query($sql);
  return $listsanpham;
}
function update_sanpham($id_sp, $id_dm, $ten_sp, $anh_sp, $so_luong, $thong_tin_sp, $mau_sac, $trang_thai, $gia_sp)
{
  if ($anh_sp != "") {
    $sql = "update tb_san_pham set id_dm='" . $id_dm . "',ten_sp='" . $ten_sp . "',anh_sp='" . $anh_sp . "' ,so_luong='" . $so_luong . "',thong_tin_sp='" . $thong_tin_sp . "',mau_sac='" . $mau_sac . "',trang_thai='" . $trang_thai . "', gia_sp='" . $gia_sp . "' where id_sp=" . $id_sp;
  } else {
    $sql = "update tb_san_pham set id_dm='" . $id_dm . "',ten_sp='" . $ten_sp . "',so_luong='" . $so_luong . "',thong_tin_sp='" . $thong_tin_sp . "',mau_sac='" . $mau_sac . "',trang_thai='" . $trang_thai . "',gia_sp='" . $gia_sp . "' where id_sp=" . $id_sp;
  }

  pdo_execute($sql);
}