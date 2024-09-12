<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="../assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Morden Men Shop</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href=".assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <main>
        <section>
            <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
                <div class="lg-rg-img position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
                </div>
                <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
                    <div class="account-form__content mb-4">
                        <?php
                        if (isset($_SESSION['ten_nguoidung'])) {
                            extract($_SESSION['ten_nguoidung']);
                        ?>
                            <div class="account-form__content mb-4">
                                Xin chào: <br>
                                <h3 class="account-form__title mb-2"> "
                                    <?= $ten_nguoidung ?>"
                                </h3>
                            </div>
                            <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhập tài khoản</a></li>

                            <?php if ($role == 1) { ?>
                                <li class="form_li"><a href="../admin/index.php">Đăng nhập ADMIN</a></li>
                            <?php } ?>
                            <?php if ($role == 1) { ?>
                                <li class="form_li"><a href="index.php?act=listhd">Xem đơn hàng</a></li>
                            <?php }
                            if ($role == 0) { ?>
                                <li class="form_li"><a href="index.php?act=listhd">Xem đơn hàng</a></li>
                            <?php } ?>

                            <li class="form_li"><a href="index.php?act=logout">Đăng xuất</a></li>

                        <?php
                        } else {

                        ?>
                    </div>
                    <div class="lg-rg-form-inner w-100">
                        <h2 class="mb-0">Đăng nhập</h2>
                        <p class="mb-0">Nhập thông tin chi tiết của bạn dưới đây</p>
                        <form action="index.php?act=login" method="POST">
                            <div class="field-box v2 position-relative w-100">
                                <label>Tên đăng nhập</label>
                                <input type="Tên người dùng" name="ten_nguoidung" id="ten_nguoidung" required>
                            </div>
                            <div class="field-box v2 position-relative w-100">
                                <label>Mật khẩu</label>
                                <input type="password" name="mat_khau" id="mat_khau" required>
                            </div>
                            <div class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                                <button class="theme-btn bg-color1" name="login" type="submit">Đăng
                                    nhập<span></span><span></span><span></span><span></span></button>

                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                <span><?php $thongbao ?></span>
                            </div>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- Main Wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>