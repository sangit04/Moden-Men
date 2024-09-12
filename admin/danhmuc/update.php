<?php
if (is_array($dm)) {
   extract(($dm));
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">DANH MỤC</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card ">
            <div class="card-header">
              <h3 class="card-title">Cập Nhật Danh Mục</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

              <?php
// if (is_array($dm)) {
//    extract(($dm));
// }
?>
 <form action="index.php?act=updatedm" method="POST">
              <div class="card-body">
               
                <div class="form-group">
                  <label>Tên loại </label> <br>
                  <input type="text" class="form-control" name="ten_danh_muc" placeholder="nhập vào tên..." value="<?=$ten_danh_muc ?>">
                </div>
                <div class="form-group">
                  <label>Mô tả</label> <br>
                  <input type="text" class="form-control" name="mo_ta" placeholder="nhập mô tả..." value="<?=$mo_ta ?>">
                </div>
                <div class="form-group">
                <form>
                    <label>Trạng thái </label> <br>
                    <select id="" name="trang_thai">
                      <div class="form-control">
                        <option value="Còn">Còn</option>
                        <option value="Hết">Hết</option>
                      </div>
                      <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                    </select>
                  </form>
                </div>
                <div class="row mb10 ">
                  <input type="hidden" name="id_dm" value="<?php if (isset($id_dm)&&($id_dm>0)) echo $id_dm;?>" >
                  <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                  <input class="mr20" type="reset" value="NHẬP LẠI">

                  <a href="index.php?act=listdm"><input class="mr20" type="button" value="DANH SÁCH"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                  echo $thongbao;

                ?>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->