<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.cwsthemes.com/liami/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 15:41:53 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
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
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <main>
        <header class="style1 w-100">
            <div class="topbar bg-color5 position-relative w-100">
                <div class="container">
                    <div class="topbar-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="topbar-left d-flex flex-wrap align-items-center">
                            <div class="social-links d-flex flex-wrap">
                                <a href="" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                            <ul class="links-list d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <li><a href="about.php" title="">Về chúng tôi</a></li>
                            </ul>
                        </div><!-- Top Left -->
                        <div class="topbar-right">
                            <ul class="links-list d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <?php
                                if (isset($_SESSION['ten_nguoidung']) && (count($_SESSION['ten_nguoidung']) > 0)) {
                                    extract($_SESSION['ten_nguoidung']);
                                    // var_dump($_SESSION['ten_nguoidung']);
                                    echo '<li><a href="index.php?act=login" title="">Hello: [' . $ten_nguoidung . ']</a></li>
                                    <li><a href="index.php?act=logout" title="">thoat</a></li>';
                                } else {

                                    echo '<li><a href="index.php?act=login" title="">Login </a></li>
                                     <li><a href="register.php" title="">register</a></li>';
                                }
                                ?>
                                <li><a href="faq.php" title="">Help</a></li>
                            </ul>
                        </div><!-- Top Right -->
                    </div><!-- Topbar Inner -->
                </div>
            </div><!-- Topbar -->
            <div class="logo-menu-wrap position-relative w-100">
                <div class="container">
                    <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">

                            <nav>
                                <ul>
                                    <li class="menu-item "><a href="index.php">Trang Chủ </a> </li>
                                    <li class="menu-item-has-children"><a href="index.php?act=allsanpham" title="">Sản
                                            phẩm</a>
                                        <ul class="children position-absolute list-unstyled mb-0 w-100">
                                            <li><a href="index.php?act=sanpham&id_dm=24" title="">Áo công sở</a></li>
                                            <li><a href="index.php?act=sanpham&id_dm=23" title="">Quần công sở</a></li>
                                            <li><a href="index.php?act=sanpham&id_dm=22" title="">Giầy công sở</a></li>

                                        </ul>
                                    </li>
                                    <!-- <li class="menu-item"><a href="index.php?act=sanpham">Sản phẩm</a></li> -->
                                    <li class="menu-item"> <a href="blog.php">Bài viết</a> </li>
                                    <li class="menu-item"><a href="contact.php">Liên hệ</a></li>


                                </ul>
                            </nav>
                        </div>
                        <div class="logo-menu-inner-mid">
                            <div class="logo">
                                <h1 class="mb-0"><a href="index.php" title="Home"><img
                                            src="assets/images/image-removebg-preview.png" alt="Logo"></a></h1>
                            </div><!-- Logo -->
                        </div>
                        <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-end">
                            <form class="searchform position-relative" action="index.php?act=search_key" method="post">
                                <input type="search" name="kyw" placeholder="Search">
                                <button type="submit"><i class="fi fi-rr-search"></i></button>
                            </form>
                            <ul class="wishlist-and-cart d-flex flex-wrap align-items-center mb-0 list-unstyled">
                                <li>
                                    <a class="cart" href="index.php?act=view_cart" title=""><i
                                            class="fi fi-rr-shopping-bag"></i></a>

                                </li>
                                <li>
                                    <a class="user" href="index.php?act=login"><i class="far fa-user"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Logo Menu Wrap -->
            <!-- Header Bottom -->
        </header><!-- Header -->
        <div class="sticky-header w-100">
            <div class="container">
                <div class="logo-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                    <div class="logo-menu-inner-left d-flex flex-wrap align-items-center">
                        <div class="logo">
                            <h1 class="mb-0"><a href="index.php" title="Home"><img class="w-65"
                                        src="assets/images/image-removebg-preview.png" alt="Logo"></a></h1>
                        </div><!-- Logo -->
                    </div>
                    <div class="logo-menu-inner-right d-flex flex-wrap align-items-center justify-content-center">
                        <nav>
                            <ul>
                                <li class="menu-item "><a href="index.php">Trang Chủ </a> </li>

                                <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Sản phẩm</a>
                                    <ul class="children position-absolute list-unstyled mb-0 w-100">
                                        <li><a href="index.php?act=sanpham&id_dm=24" title="">Áo</a></li>
                                        <li><a href="index.php?act=sanpham&id_dm=23" title="">Quần</a></li>
                                        <li><a href="index.php?act=sanpham&id_dm=22" title="">Phụ kiện</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item"> <a href="blog.php">Bài viết</a> </li>
                                <li class="menu-item"><a href="contact.php">Liên hệ</a></li>



                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- Sticky Header -->

        <div class="header-search d-flex flex-wrap justify-content-center align-items-center w-100">
            <span class="search-close-btn d-inline-flex flex-wrap justify-content-center align-items-center"><i
                    class="fi fi-rr-cross-small"></i></span>
            <form>
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fi fi-rr-search"></i></button>
            </form>
        </div><!-- Header Search -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/aos.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/particles.min.js"></script>
        <script src="assets/js/tilt.jquery.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/custom-scripts.js"></script>