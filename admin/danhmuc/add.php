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
                            <h3 class="card-title">Thêm Danh Mục</small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form action="index.php?act=adddm" method="POST">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Tên loại </label> <br>
                                    <input type="text" class="form-control" name="ten_danh_muc"
                                        placeholder="nhập vào tên...">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label> <br>
                                    <input type="text" class="form-control" name="mo_ta" placeholder="nhập mô tả...">
                                </div>

                                <a href="index.php?act=listdm"><input class="btn btn-primary" type="button"
                                        value="DANH SÁCH"></a>
                            </div>
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