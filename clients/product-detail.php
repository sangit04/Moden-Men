<main>
    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="product-detail position-relative w-100">
                    <form action="index.php?act=add_to_cart" method="post">
                        <?php
                        $hinhpath = "../upload/";
                        $linkspct = $hinhpath . $anh_sp;
                        echo '
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-7">
                            <div class="product-detail-imgs position-relative w-100">
                                <span class="bg-color4 rounded-pill position-absolute">20% OFF</span>
                                <ul class="product-detail-big-imgs list-unstyled mb-0">
                                    <li>
                                        <div class="product-detail-big-img overflow-hidden"><a href=""
                                                data-fancybox="gallery" title=""><img src=' . $linkspct . '
                        alt="<?= $ten_sp ?>" ></i></a>
                </div>
                </li>
                </ul>
            </div><!-- Product Detail Images -->
        </div>
        <div class="col-md-12 col-sm-12 col-lg-5">
            <div class="product-detail-info position-relative w-100">
                <div class="product-rate-review d-flex flex-wrap align-items-center">
                    <span class="d-inline-block rate"><i class="fas fa-star on"></i><i class="fas fa-star on"></i><i
                            class="fas fa-star on"></i><i class="fas fa-star on"></i><i
                            class="fas fa-star off"></i></span>
                    <a class="d-inline-block review-link" href="javascript:void(0);" title="">(1
                        customer review)</a>
                </div>
                <h2 class="mb-0" name="ten_sp"> ' . $ten_sp . '</h2>

                <span class="d-block price text-success" name="gia_sp"> ' . number_format($gia_sp, 0, ',', '.') .
                    '<b>VND</b></span>

                <p class="mb-0"> ' . $thong_tin_sp . ' </p>

                <div class="product-bottom d-flex flex-wrap align-items-center w-100 mt-5">
                    <div class="product-quanty">
                        <input type="number" class="qty" name="so_luong">
                    </div>
                    <input type="hidden" name="id" value="' . $id_sp . '">
                    <input type="hidden" name="gia_sp" value="' . $gia_sp . '">
                    <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                    <input type="hidden" name="anh_sp" value="' . $linkspct . '">
                    <button type="submit" value="THÊM VÀO GIỎ HÀNG" name="themgiohang" class="theme-btn bg-color1">Thêm
                        giỏ hàng</button>
                </div>';
                // var_dump($linkspct);
                // var_dump($so_luong);
                ?>

                </form>
            </div>
        </div>
        </div>
        </div><!-- Product Detail -->
        </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-110 pb-120 position-relative">
            <div class="container">
                <div class="sec-title-wrap d-flex flex-wrap align-items-end justify-content-between w-100">
                    <div class="sec-title position-relative">
                        <h2 class="mb-0">Sản phẩm cùng loại</h2>
                    </div><!-- Section Title -->
                    <div class="sec-btn">
                        <a class="theme-btn bg-color1 brd-btn" href="index.php?act=allsanpham" title="">View all
                            Products<span></span><span></span><span></span><span></span></a>
                    </div>
                </div><!-- Section Title Wrap -->
                <div class="products-wrap res-row position-relative w-100">
                    <div class="row mrg30">
                        <?php foreach ($sp_cungloai as $sp) { ?>
                        <div class="col-md-4 col-sm-6 col-lg-3">
                            <div class="product-box position-relative w-100">
                                <div class="product-img overflow-hidden position-relative w-100">
                                    <a href="index.php?act=sanphamct&id_sp=<?= $sp['id_sp'] ?>">
                                        <img src="../upload/<?= $sp['anh_sp'] ?>" alt="<?= $sp['ten_sp'] ?>">
                                    </a>
                                    <div class="product-btns position-absolute">
                                        <a class="wishlist-btn" href="wishlist.html" title=""><i
                                                class="fi fi-rr-heart"></i></a>
                                        <a class="cart-btn" href="cart.html" title=""><i
                                                class="fi-rr-shopping-bag"></i></a>
                                        <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg"
                                            data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                    </div>
                                </div>
                                <div class="product-info w-100">
                                    <h4 class="mb-0"> <a
                                            href="index.php?act=sanphamct&id_sp=<?= $sp['id_sp'] ?>"><?= $sp['ten_sp'] ?></a>
                                    </h4>
                                    <span class="text-danger"><?= number_format($sp['gia_sp'], 0, ',', '.') ?>VND</span>
                                    <div class="products-color d-flex flex-wrap">
                                    </div>
                                    <button type="submit" value="THÊM VÀO GIỎ HÀNG" name="themgiohang"
                                        class="theme-btn bg-color4">Thêm
                                        giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div><!-- Products Wrap -->
            </div>
        </div>
    </section>
</main><!-- Main Wrapper -->