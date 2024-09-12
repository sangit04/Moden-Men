<?php
if (is_array($tb_san_pham)) {
  extract(($tb_san_pham));
}
$hinhpath = "../upload/" . $anh_sp;
if (is_file($hinhpath)) {
  $anh_sp = "<img src='" . $hinhpath . "'height='80'>";
} else {
  $anh_sp = "no photo";
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">SẢN PHẨM</h1>
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
                            <h3 class="card-title">Cập Nhật Sản Phẩm</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <?php
            // }
            ?>
                        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <select name="id_dm">
                                    <option value="0" selected>Tất cả</option>
                                    <?php
                  foreach ($listdanhmuc as $tb_danhmuc) {
                    extract($tb_danhmuc);
                    if ($id_dm == $id_dm) $s = "selected";
                    else $s = "";
                    echo '<option value="' . $id_dm . '"' . $s . '>' . $ten_danh_muc . '</option>';
                  }

                  ?>
                                </select>

                                <div class="form-group">
                                    <label>TÊN SẢN PHẨM</label> <br>
                                    <input type="text" class="form-control" name="ten_sp" placeholder="nhập vào tên..."
                                        value="<?= $ten_sp ?>">
                                </div>
                                <div class="form-group">
                                    <label>ẢNH</label> <br>
                                    <input type="file" name="anh_sp" id="" <?= $anh_sp ?>>
                                </div>
                                <div class="form-group">
                                    <label>SỐ LƯỢNG</label> <br>
                                    <input type="text" class="form-control" name="so_luong"
                                        placeholder="nhập số lượng..." value="<?= $so_luong ?>">
                                </div>

                                <div class="form-group">
                                    <label>THÔNG TIN</label> <br>
                                    <input type="text" class="form-control" name="thong_tin_sp"
                                        placeholder="nhập thông tin..." value="<?= $thong_tin_sp ?>">
                                </div>
                                <div class="form-group">
                                    <label>MÀU SẮC</label> <br>
                                    <input type="text" class="form-control" name="mau_sac" placeholder="nhập màu sắc..."
                                        value="<?= $mau_sac ?>">
                                </div>


                                <div class="form-group">
                                    <label>GIÁ</label> <br>
                                    <input type="text" class="form-control" name="gia_sp" placeholder="nhập giá..."
                                        value="<?= $gia_sp ?>">
                                </div>
                                <div class="form-group">
                                    <form>
                                        <label>Trạng thái </label>
                                        <select id="" name="trang_thai">
                                            <div class="form-control">
                                                <option value="Còn hàng">Còn hàng</option>
                                                <option value="Hết hàng">Hết hàng</option>
                                            </div>
                                            <!-- <input type="text" class="form-control" name="trang_thai" placeholder="nhập trạng thái..."> -->
                                        </select>
                                    </form>
                                    <div class="row mb10 ">
                                        <input type="hidden" name="id_sp" value="<?php echo $tb_san_pham['id_sp']; ?>">
                                        <input class="btn btn-info mr-3" type="submit" name="capnhat" value="CẬP NHẬT">
                                        <input class="btn btn-info mr-3" type="reset" value="NHẬP LẠI">

                                        <a href="index.php?act=listsp"><input class="btn btn-info mr-3" type="button"
                                                value="DANH SÁCH"></a>
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