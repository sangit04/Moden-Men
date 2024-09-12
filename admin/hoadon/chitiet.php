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
              <h3 class="card-title">MÃ ĐƠN HÀNG:  <?php
             foreach ($listBill  as $tb_hoa_don ) {
                extract($tb_hoa_don );
              
                echo'
                 '.$id_hoa_don.'
                
                ';
             }
            ?></h3>

           
             </div>
           
           
            <div class="card-body">
              <h4>#1. Thông tin đơn hàng</h4>
            <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
               
                
                <th>TÊN KHÁCH HÀNG</th>
                <!-- <th>NGÀY ĐẶT HÀNG</th> -->
               
                <th>ĐỊA CHỈ</th>
                <th>GHI CHÚ</th>
               
            </tr>
            <?php
             foreach ($listBill  as $tb_hoa_don ) {
                extract($tb_hoa_don );
              
                echo'
                <tr>
               
               
                <td>'.$full_name.'</td>
               
              
                <td>'.$dia_chi.'</td>
                <td>'.$ghi_chu.'</td>
                
              
            </tr>';
             }
            ?>


              </table>
             
            <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
               
                
               
                <th>TRẠNG THÁI</th>
                <!-- <th>NGÀY ĐẶT HÀNG</th> -->
               
               
               
            </tr>
            <?php
             foreach ($listBill  as $tb_hoa_don ) {
                extract($tb_hoa_don );
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
                $suahd="index.php?act=suahd&id_hoa_don=".$id_hoa_don;
                if ($trang_thai != -1) {
                  echo'
                  <tr>
                 
                 
                 
                 <td>
                 '.$trangthainame.' <br>
                  <a href="'.$suahd.'">Cap nhat</a></td>
                 </td>
                
                
              </tr>';
                }
                else {
                  echo'
                <tr>
               
               
               
               <td>
               '.$trangthainame.' <br>
              
               </td>
              
              
            </tr>';
                }
               
             }
            ?>


              </table>
            <!-- /.card-header -->
             </div>
            <div class="card-body">
            <h4>#2. Thông tin sản phẩm</h4>
              <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
               
                <th>TÊN SP</th>
                <th>ẢNH SP</th>
                <th>GIÁ</th>
                <th>SỐ LƯỢNG</th>
                
            </tr>
            <?php
             foreach ($chitiet  as $ct ) {
                extract($ct );
                // $suahd="index.php?act=suahd&id_hoa_don=".$id_hd;
                // $xoahd="index.php?act=xoahd&id_hoa_don=".$id_hd;
                echo'
                <tr>
               
                <td>'.$ten_sp.'</td>
                <td><img src="'.$anh_sp.'" width="50px"></td>
                <td>'.$so_luong_mua.'</td>
                <td>'.$gia_sp.' VNĐ</td>
               
                
               
            </tr>';
             }
            ?>


              </table>

              
            </div>
            <div class="card-body">
              <h4>#3. Lịch sử đơn hàng</h4>
            <table border="1" id="example2" class="table table-bordered table-hover">
                <!-- <thead> -->
                <tr>
               
                
                <th>NGÀY ĐẶT ĐƠN</th>
               
                <!-- <th>NGÀY ĐẶT HÀNG</th> -->
               
               
               
            </tr>
            <?php
             foreach ($listBill  as $tb_hoa_don ) {
                extract($tb_hoa_don );
              
                echo'
                <tr>
               
               
                <td>'.$ngay_dat_don.'</td>
              
              
              
            </tr>';
             }
            ?>


              </table>
              <div class="mr100 ">
                <a href="index.php?act=listhd"> <input class="mr20" type="button" value="Quay Lại"></a>
              </div>
            <!-- /.card-header -->
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