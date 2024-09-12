<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ĐƠN HÀNG</h1>
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
                            <h3 class="card-title">Danh Sách Đơn Hàng</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table border="1" id="example2" class="table table-bordered table-hover">
                                <!-- <thead> -->
                                <tr>
                                    <th>MÃ LOẠI</th>
                                    <th>ID NGƯỜI DÙNG</th>
                                    <th>NGÀY ĐẶT HÀNG</th>
                                    <th>TỔNG GIÁ</th>
                                    <th>ĐỊA CHỈ</th>
                                    <th>GHI CHÚ</th>
                                    <th>TRẠNG THÁI</th>
                                    <th>CHI TIẾT</th>
                                </tr>
                                <?php

                foreach ($listhd  as $tb_hoa_don) {
                  extract($tb_hoa_don);
                  $trangthainame = "";
                  switch ($trang_thai) {
                    case '-1':
                      $trangthainame = "đã hủy";
                      break;
                    case '0':
                      $trangthainame = "chờ xác nhận";
                      break;
                    case '1':
                      $trangthainame = "đã xác nhận";
                      break;
                    case '2':
                      $trangthainame = "đang giao hàng";
                      break;
                    case '3':
                      $trangthainame = "đã nhận hàng";
                      break;
                    case '4':
                      $trangthainame = "thành công";
                      break;
                  }
                  $suahd = "index.php?act=suahd&id_hoa_don=" . $id_hoa_don;
                  // $xoahd="index.php?act=xoahd&id_hoa_don=".$id_hd;
                  if ($trang_thai != -1) {
                    echo '
                  <tr>
                  <td>' . $id_hoa_don . '</td>
                  <td>' . $full_name . '</td>
                  <td>' . $ngay_dat_don . '</td>
                  <td>' . $tong_gia . '</td>
                  <td>' . $dia_chi . '</td>
                  <td>' . $ghi_chu . '</td>
                  
                  <td>
                   ' . $trangthainame . ' <br>
                   <a class="btn btn-info" href="' . $suahd . '">Cap nhat</a></td>
                  <td>
                  <a class="btn btn-primary" href="index.php?act=chitiet_hoadon&id=' . $id_hoa_don . '">xem chi tiết</a>
                  </td>
              </tr>';
                  } else {
                    echo '
                <tr>
                <td>' . $id_hoa_don . '</td>
                <td>' . $full_name . '</td>
                <td>' . $ngay_dat_don . '</td>
                <td>' . $tong_gia . '</td>
                <td>' . $dia_chi . '</td>
                <td>' . $ghi_chu . '</td>
                
                <td>
                 ' . $trangthainame . ' <br>
                
                <td>
                <a class="btn btn-primary" href="index.php?act=chitiet_hoadon&id=' . $id_hoa_don . '">xem chi tiết</a>
                </td>
            </tr>';
                  }
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