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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh Sách Danh Mục</h3>
                        </div>

                        <div class="card-body">
                            <!-- /.card-header -->
                            <!-- <input type="text" name="kyw">
            <select name="id_dm">
                <option value="0" selected>Tất cả</option>
                <?php
                // foreach ($listdanhmuc as $tb_danhmuc) {
                //    extract($tb_danhmuc);
                //    echo '<option value="'.$id_dm.'">'.$ten_danh_muc.'</option>';
                // }

                ?>
                </select>
                <input type="submit" name="listok" value="GO"> -->
                            <table border="1" id="example2" class="table table-bordered table-hover">
                                <!-- <thead> -->
                                <tr>
                                    <th></th>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN LOẠI</th>
                                    <th>MÔ TẢ</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                foreach ($listdanhmuc as $tb_danhmuc) {
                  extract($tb_danhmuc);
                  $suadm = "index.php?act=suadm&id_dm=" . $id_dm;
                  $xoadm = "index.php?act=xoadm&id_dm=" . $id_dm;
                  echo '
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id_dm . '</td>
                <td>' . $ten_danh_muc . '</td>
                <td>' . $mo_ta . '</td>
                <td><a href="' . $suadm . '"><input class="btn btn-primary" type="button" value="Sửa"><a href="' . $xoadm . '"><input class="btn btn-danger" type="button" value="Xóa"></td>
            </tr>';
                }
                ?>


                            </table>

                            <div>
                                <a href="index.php?act=adddm"> <input class="btn btn-primary" type="button"
                                        value="NHẬP THÊM"></a>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->