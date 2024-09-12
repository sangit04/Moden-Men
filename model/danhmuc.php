<?php
  function insert_danhmuc($ten_danh_muc,$mo_ta,$trang_thai){
    $sql = "insert into tb_danhmuc(ten_danh_muc,mo_ta,trang_thai) values('$ten_danh_muc','$mo_ta','$trang_thai')";
    pdo_execute($sql);
   
  }
  function delete_danhmuc($id_dm){
    $sql = "delete from tb_danhmuc where id_dm =" . $_GET['id_dm'];
    pdo_execute($sql);
  }
  function loadall_danhmuc(){
    $sql = "select * from tb_danhmuc order by id_dm desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
  }
  function loadone_danhmuc($id_dm){
      $sql ="select * from tb_danhmuc where id_dm=".$id_dm;
      $dm = pdo_query_one($sql);
      return $dm;
  }
  // function update_danhmuc($ten_danh_muc,$mo_ta,$trang_thai,$id_dm){
  //   $sql = "update tb_danhmuc set  ten_danh_muc='" .$ten_danh_muc. "',mo_ta='".$mo_ta."' ,trang_thai='".$trang_thai."' where id_dm=" . $id_dm;
   
  //   pdo_execute($sql);
  // }
  function update_danhmuc($id_dm,$ten_danh_muc,$mo_ta,$trang_thai){
  
    $sql = "UPDATE `tb_danhmuc` SET `ten_danh_muc` = '$ten_danh_muc', `mo_ta` = '$mo_ta', `trang_thai` = '$trang_thai' WHERE `tb_danhmuc`.`id_dm` = $id_dm;";
  
 
  pdo_execute($sql);
}
  
?>