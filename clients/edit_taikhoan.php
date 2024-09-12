<div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
    <div class="lg-rg-img position-relative">
        <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
    </div>
    <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
        <div class="account-form__content mb-4">
            <?php
            if (isset($_SESSION['ten_nguoidung']) && (is_array($_SESSION['ten_nguoidung']))) {
                extract($_SESSION['ten_nguoidung']);
            }
            ?>
        </div>
        <div class="lg-rg-form-inner w-100">

            <h2 class="mb-0">Cập nhật tài khoản</h2>
            <p class="mb-0">Nhập thông tin chi tiết của bạn dưới đây</p>
            <form action="index.php?act=edit_taikhoan" method="POST" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="ten_nguoidung" class="form-label"> Tên đăng nhập</label>
                            <input type="text" name="ten_nguoidung" class="form-control" id="ten_nguoidung" placeholder=" tên đăng nhập..." value="<?= $ten_nguoidung ?>">
                        </div>

                    </div>

                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="gmail" class="form-label"> Gmail</label>
                        <input type="text" name="gmail" class="form-control" id="gmail" placeholder="gmail..." value="<?= $gmail ?>">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="mat_khau" class="form-label">Mật khẩu</label>
                        <input type="text" name="mat_khau" class="form-control" id="mat_khau" placeholder=" mật khẩu..." value="<?= $mat_khau ?>">
                    </div>
                </div>


        </div>
        <div class="col-sm-6">
        </div>

        <div class="col-sm-12 mt-3">
            <div class="form--check form-group">
                <!-- <input class="form-check-input" type="checkbox" value="" id="remember">
                                         -->
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input type="hidden" name="id_nguoidung" value="<?php if (isset($id_nguoidung) && ($id_nguoidung > 0))
                                                                    echo $id_nguoidung; ?>">
                <input type="submit" value="Cập nhật" name="capnhat" class="btn btn--lg btn--primary">
            </div>
        </div>
        <!-- <div class="col-sm-12">
                                    <div class="have-account text-center">
                                        <p class="have-account__text">Already Have An Account? <a
                                                href="index.php?act=dangnhap"
                                                class="have-account__link text--base">Login Now</a></p>
                                    </div>
                                </div> -->
    </div>
    </form>
    <h2 style="color: red;" class="thongbao">
        <?php

        if (isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
        }

        ?>

</div>
</div>
</div>

<?php
// include("footer.php");
?>