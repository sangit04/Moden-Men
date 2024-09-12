<?php
function insert_taikhoan($ten_nguoidung, $gmail, $mat_khau, $sdt)
{

    $sql = "insert into tb_tai_khoan(ten_nguoidung,gmail,mat_khau,sdt) values('$ten_nguoidung','$gmail','$mat_khau','$sdt')";
    pdo_execute($sql);
}

function delete_taikhoan($id_nguoidung)
{
    $sql = "delete from tb_tai_khoan where id_nguoidung=" . $_GET['id_nguoidung'];
    pdo_execute($sql);
}
function checkuser($ten_nguoidung, $mat_khau)
{
    $sql = "select * from tb_tai_khoan where ten_nguoidung='" . $ten_nguoidung . "' AND mat_khau='" . $mat_khau . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}
function update_taikhoan($id_nguoidung, $ten_nguoidung, $mat_khau, $gmail)
{
    $sql = "update tb_tai_khoan set ten_nguoidung='" . $ten_nguoidung . "',mat_khau='" . $mat_khau . "',gmail='" . $gmail . "' where id_nguoidung=" . $id_nguoidung;
    pdo_execute($sql);
}

function checkemail($gmail)
{
    $sql = "select * from tb_tai_khoan where gmail='" . $gmail . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}
function loadall_taikhoan($kyw, $role = 0)
{
    $sql = "SELECT * FROM tb_tai_khoan WHERE 1";
    if ($kyw != "") {
        $sql .= " AND ten_nguoi_dung LIKE '%" . $kyw . "%'";
    }
    if ($role > 0) {
        $sql .= " AND role = '" . $role . "'";
    }
    $sql .= " ORDER BY id_nguoidung DESC";

    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

//   function loadone_sanpham($id_sp){
//       $sql ="select * from tb_san_pham where id_sp=".$id_sp;
//       $tb_san_pham = pdo_query_one($sql);
//       return $tb_san_pham;
//   }
//   function load_ten_dm($iddm){
//     if ($iddm>0) {
//       $sql ="select * from danhmuc where id=".$iddm;
//       $dm = pdo_query_one($sql);
//       extract($dm);
//       return $name;
//     }
//     else {
//       return "";
//     }

// }
//   function load_sanpham_cungloai($id,$iddm){
//     $sql ="select * from sanpham where iddm=".$iddm." AND id <>".$id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
//   function update_sanpham($id_sp,$id_dm,$ten_sp,$anh_sp,$so_luong,$bao_hanh,$thong_tin_sp,$mau_sac,$bo_nho,$gia_sp){
//     if ($anh_sp!="") {
//       $sql = "update tb_san_pham set id_dm='" .$id_dm. "',ten_sp='" .$ten_sp. "',anh_sp='".$anh_sp."' ,so_luong='".$so_luong."',bao_hanh='".$bao_hanh."',thong_tin_sp='".$thong_tin_sp."',mau_sac='".$mau_sac."',bo_nho='".$bo_nho."',gia_sp='" .$gia_sp. "' where id_sp=" . $id_sp;
//     }
//     else {
//       $sql = "update tb_san_pham set id_dm='" .$id_dm. "',ten_sp='" .$ten_sp. "',so_luong='".$so_luong."',bao_hanh='".$bao_hanh."',thong_tin_sp='".$thong_tin_sp."',mau_sac='".$mau_sac."',bo_nho='".$bo_nho."',gia_sp='" .$gia_sp. "' where id_sp=" . $id_sp;
//     }

//     pdo_execute($sql);
//   }