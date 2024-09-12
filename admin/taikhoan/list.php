<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">TÀI KHOẢN</h1>
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
                            <h3 class="card-title">Danh Sách Tài Khoản</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table border="1" id="example2" class="table table-bordered table-hover">
                                <!-- <thead> -->
                                <tr>
                                    <th>ID NGƯỜI DÙNG</th>
                                    <th>TÊN NGƯỜI DÙNG</th>
                                    <th>GMAIL</th>
                                    <th>MẬT KHẨU</th>
                                    <th>CHỨC VỤ</th>

                                </tr>
                                <?php
                                foreach ($listtaikhoan as $tb_tai_khoan) {
                                    extract($tb_tai_khoan);
                                    $suatk = "index.php?act=suatk&id_nguoidung=" . $id_nguoidung;
                                    $xoatk = "index.php?act=xoatk&id_nguoidung=" . $id_nguoidung;
                                    if ($role == 1) {
                                        $role = "ADMIN";
                                    } else {
                                        $role = "USER";
                                    }
                                    echo '
                <tr>
                <td>' . $id_nguoidung . '</td>
                <td>' . $ten_nguoidung . '</td>
                <td>' . $gmail . '</td>
                <td>' . $mat_khau . '</td>
                <td>' . $role . '</td>
                
               
            </tr>';
                                }
                                ?>


                            </table>

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