<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sản phẩm</h1>
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
                            <h3 class="card-title">Danh sách sản phẩm</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="index.php?act=listsp" method="post">
                                <input type="text" name="kyw">
                                <select name="id_dm">
                                    <option value="0" selected>Tất cả</option>
                                    <?php
                                    foreach ($listdanhmuc as $tb_danhmuc) {
                                        extract($tb_danhmuc);
                                        echo '<option value="' . $id_dm . '">' . $ten_danh_muc . '</option>';
                                    }

                                    ?>
                                </select>
                                <input type="submit" name="listok" value="GO">
                            </form>

                            <table border="1" id="example2" class="table table-bordered table-hover ">
                                <!-- <thead> -->
                                <tr>
                                    <th>MÃ LOẠI</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>ẢNH</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>THÔNG TIN</th>
                                    <th>GIÁ</th>
                                    <th>Màu sắc</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>Action</th>
                                </tr>
                                <?php
                                foreach ($listsanpham as $tb_san_pham) {
                                    extract($tb_san_pham);
                                    $suasp = "index.php?act=suasp&id_sp=" . $id_sp;
                                    $xoasp = "index.php?act=xoasp&id_sp=" . $id_sp;
                                    $hinhpath = "../upload/" . $anh_sp;
                                    if (is_file($hinhpath)) {
                                        $anh_sp = "<img src='" . $hinhpath . "'height='80'>";
                                    } else {
                                        $anh_sp = "no photo";
                                    }
                                    echo '
                <tr>
                <td>' . $id_sp . '</td>
                <td>' . $ten_sp . '</td>
                <td>' . $anh_sp . '</td>
                <td>' . $so_luong . '</td>
             
                <td>' . $thong_tin_sp . '</td>
               
                <td>' . $gia_sp . '</td>
                <td>' . $mau_sac . '</td>
                <td>' . $trang_thai . '</td>
                <td ><a href="' . $suasp . '"><input type="button" class="btn btn-primary  mr-3"  value="Sửa"><a href="' . $xoasp . '"><input class="btn btn-danger mr10" type="button" value="Xóa"></td>
            </tr>';
                                }
                                ?>


                            </table>

                            <div class="mr100 ">
                                <a href="index.php?act=addsp"> <input class="btn btn-info" type="button" value="NHẬP THÊM"></a>
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