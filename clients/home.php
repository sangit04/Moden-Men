<!-- banner -->
<section>
    <div class="w-100 pt-30 position-relative">
        <div class="container">
            <div class="slider-area-wrap position-relative w-100">
                <div class="slider-caro nav-style1 pagi-style1">
                    <div class="slider-item overflow-hidden position-relative d-block w-100">
                        <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img1-1.jpg"
                            alt="Slide Image 1">
                        <div class="slider-cap position-absolute">
                            <h1 class="mb-0 animated fadeInUp">Giảm giá 30%</h1>
                            <a class="theme-btn bg-color1 animated fadeInUp" href="index.php?act=allsanpham"
                                title="">Mua
                                ngay<span></span><span></span><span></span><span></span></a>
                        </div>
                    </div>
                    <div class="slider-item overflow-hidden position-relative d-block w-100">
                        <img class="img-fluid d-block w-100" src="assets/images/resources/slide-img1-2.jpg"
                            alt="Slide Image 2">
                    </div>
                </div>
            </div><!-- Slider Area Wrap -->
        </div>
    </div>
</section>
<!-- sản phẩm -->
<section>
    <div class="row justify-content-center gy-4">


    </div>
    <div class="w-100 pt-110 pb-120 position-relative">
        <div class="container">

            <div class="tabs-wrap position-relative w-100">
                <ul class="nav nav-tabs justify-content-center">
                    <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1-1"
                            type="button">New Product</button></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1-1">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <?php
                                $i = 0;

                                foreach ($spnew as $sp) {
                                    extract($sp);
                                    $hinhpath = "../upload/";
                                    $anh_sp = $hinhpath . $anh_sp;
                                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;

                                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                                        $mr = "";
                                    } else {
                                        $mr = "mr";
                                    }
                                    echo '
                      <div class="col-md-4 col-sm-6 col-lg-3">
                       <form action="index.php?act=add_to_cart" method="post">
                                        <div class="product-box position-relative w-100 ">
                                            <div class="product-img overflow-hidden position-relative w-100">
                                                <a href="' . $linksp . '" title=""><img class="img-fluid w-100" src="' . $anh_sp . '" alt=""></a>
                                                <div class="product-btns position-absolute">
                                                    <a class="expand-btn" href="' . $anh_sp . '" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-info w-100">
                                                <h4 class="mb-0"><a href="' . $linksp . '" title="" > ' . $ten_sp . '</a></h4>
                                                <span class="text-danger">' . number_format($gia_sp, 0, ',', '.') . ' VND</span>
                                            </div>
                                                 <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="themgiohang" class="theme-btn mid-btn bg-color4">
                                                    <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                                                    <input type="hidden" name="gia_sp" value="' . $gia_sp . '">
                                                    <input type="hidden" name="anh_sp" value="' . $anh_sp . '">
                                                    <input type="hidden" name="so_luong" value="1">
                                                    <input type="hidden" name="id" value="' . $id_sp . '">
                                           
                                        </div>
                                        
                                    </div>
                                   
                                    </form>
                  ';
                                    $i += 1;
                                }
                                ?>

                            </div>
                        </div><!-- Products Wrap -->
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="index.php?act=allsanpham" title="">View All
                                Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                    <div class="tab-pane fade" id="tab1-2">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-2.jpg"
                                                    alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long Fit T-shirt</a>
                                            </h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-1.jpg"
                                                    alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jersey Graphic
                                                    Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-5.jpg"
                                                    alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Skinny mid-rise
                                                    trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-6.jpg"
                                                    alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Sweater with
                                                    slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-4.jpg"
                                                    alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Round neck
                                                    sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-7.jpg"
                                                    alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">New Blend Field
                                                    Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-3.jpg"
                                                    alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long strappy
                                                    dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-8.jpg"
                                                    alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long Fit dress</a>
                                            </h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-10.jpg"
                                                    alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jersey Graphic Tee
                                                    Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-9.jpg"
                                                    alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Cotton Baseball
                                                    Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-12.jpg"
                                                    alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jacket with pouch
                                                    pocket</a></h4>
                                            <span class="price">$55</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-11.jpg"
                                                    alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Grown cotton
                                                    T-shirt</a></h4>
                                            <span class="price">$72</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Products Wrap -->
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="product-detail2.php" title="">View All
                                Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                    <div class="tab-pane fade" id="tab1-3">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-1.jpg"
                                                    alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jersey Graphic
                                                    Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-2.jpg"
                                                    alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long Fit T-shirt</a>
                                            </h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-3.jpg"
                                                    alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long strappy
                                                    dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-4.jpg"
                                                    alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Round neck
                                                    sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-5.jpg"
                                                    alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Skinny mid-rise
                                                    trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-6.jpg"
                                                    alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Sweater with
                                                    slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-7.jpg"
                                                    alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">New Blend Field
                                                    Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-8.jpg"
                                                    alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long Fit dress</a>
                                            </h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-9.jpg"
                                                    alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Cotton Baseball
                                                    Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-10.jpg"
                                                    alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jersey Graphic Tee
                                                    Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-11.jpg"
                                                    alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Grown cotton
                                                    T-shirt</a></h4>
                                            <span class="price">$72</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-12.jpg"
                                                    alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jacket with pouch
                                                    pocket</a></h4>
                                            <span class="price">$55</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Products Wrap -->
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="product-detail3.php" title="">View All
                                Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                    <div class="tab-pane fade" id="tab1-4">
                        <div class="products-wrap position-relative w-100">
                            <div class="row mrg30">
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-2.jpg"
                                                    alt="Product Image 2"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-2.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long Fit T-shirt</a>
                                            </h4>
                                            <span class="price">$50</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-1.jpg"
                                                    alt="Product Image 1"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-1.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jersey Graphic
                                                    Tee</a></h4>
                                            <span class="price">$89</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-5.jpg"
                                                    alt="Product Image 5"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-5.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Skinny mid-rise
                                                    trousers</a></h4>
                                            <span class="price">$70</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-6.jpg"
                                                    alt="Product Image 6"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-6.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Sweater with
                                                    slogan</a></h4>
                                            <span class="price">$30</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-4.jpg"
                                                    alt="Product Image 4"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-4.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Round neck
                                                    sweater</a></h4>
                                            <span class="price">$40</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-7.jpg"
                                                    alt="Product Image 7"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-7.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">New Blend Field
                                                    Jacket</a></h4>
                                            <span class="price">$80</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-3.jpg"
                                                    alt="Product Image 3"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-3.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long strappy
                                                    dress</a></h4>
                                            <span class="price">$100</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-8.jpg"
                                                    alt="Product Image 8"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-8.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Long Fit dress</a>
                                            </h4>
                                            <span class="price">$120</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-10.jpg"
                                                    alt="Product Image 10"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-10.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jersey Graphic Tee
                                                    Dolce</a></h4>
                                            <span class="price">$99</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-9.jpg"
                                                    alt="Product Image 9"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-9.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Cotton Baseball
                                                    Cap</a></h4>
                                            <span class="price">$45</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-12.jpg"
                                                    alt="Product Image 12"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-12.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Jacket with pouch
                                                    pocket</a></h4>
                                            <span class="price">$55</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="product-box position-relative w-100">
                                        <div class="product-img overflow-hidden position-relative w-100">
                                            <a href="product-detail.php" title=""><img class="img-fluid w-100"
                                                    src="assets/images/resources/product-img1-11.jpg"
                                                    alt="Product Image 11"></a>
                                            <div class="product-btns position-absolute">
                                                <a class="wishlist-btn" href="wishlist.php" title=""><i
                                                        class="fi fi-rr-heart"></i></a>
                                                <a class="cart-btn" href="cart.php" title=""><i
                                                        class="fi-rr-shopping-bag"></i></a>
                                                <a class="expand-btn" href="assets/images/resources/product-img1-11.jpg"
                                                    data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-info w-100">
                                            <h4 class="mb-0"><a href="product-detail.php" title="">Grown cotton
                                                    T-shirt</a></h4>
                                            <span class="price">$72</span>
                                            <div class="products-color d-flex flex-wrap">
                                                <a class="bg-color6 active" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color7" href="javascript:void(0);" title=""></a>
                                                <a class="bg-color8" href="javascript:void(0);" title=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Products Wrap -->
                        <div class="view-more d-block mt-60 position-relative text-center w-100">
                            <a class="theme-btn bg-color1 brd-btn" href="index.php?act=all" title="">View All
                                Products<span></span><span></span><span></span><span></span></a>
                        </div><!-- View More -->
                    </div>
                </div>
            </div><!-- Tabs Wrap -->
        </div>
    </div>
</section>
<!-- sản phẩm bán chạy -->

<section>
    <div class="w-100 pt-110 pb-40 position-relative">
        <div class="container">
            <div class="sec-title position-relative w-100">
                <h2 class="mb-0">Top sản phẩm yêu thích nhất</h2>
            </div><!-- Section Title -->
            <div class="products-wrap position-relative w-100">
                <div class="row mrg30">
                    <?php
                    $i = 0;

                    foreach ($dstop4 as $sp) {
                        extract($sp);
                        $hinhpath = "../upload/";
                        // if (is_file($hinhpath)) {
                        //     $anh_sp="<img src='".$hinhpath."'height='80'>";
                        // }
                        // else {
                        //     $anh_sp="no photo";
                        // }
                        $anh_sp = $hinhpath . $anh_sp;
                        $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;

                        // if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                        //     $mr = "";
                        // } else {
                        //     $mr = "mr";
                        // }
                        echo '
                      <div class="col-md-4 col-sm-6 col-lg-3">
                       <form action="index.php?act=add_to_cart" method="post">
                                        <div class="product-box position-relative w-100 ">
                                            <div class="product-img overflow-hidden position-relative w-100">
                                                 <input type="hidden" name="id_sp" value="' . $id_sp . '">

                                                <a href="' . $linksp . '" title=""><img class="img-fluid w-100" src="' . $anh_sp . '" alt=""></a>
                                                <div class="product-btns position-absolute">
                                                    <button type="submit" href="index.php?act=add_to_cart" class="cart-btn" name="buy"> <i class="fi-rr-shopping-bag"></i></button>
                                                     <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                                            <input type="hidden" name="gia_sp" value="' . $gia_sp . '">
                                            <input type="hidden" name="anh_sp" value="' . $anh_sp . '">
                                            <input type="hidden" name="id" value="' . $id_sp . '">
                                                    <a class="expand-btn" href="' . $anh_sp . '" data-fancybox title=""><i class="fi fi-rr-picture"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-info w-100">
                                                <h4 class="mb-0"><a href="product-detail.php" title="" > ' . $ten_sp . '</a></h4>
                                               
                                                <span class="text-danger">' . number_format($gia_sp, 0, ',', '.') . ' VND</span>
                                                <div class="products-color d-flex flex-wrap">
                                                   
                                                </div>
                                           
                                            </div>
                                                 <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="themgiohang" class="theme-btn mid-btn bg-color4">
                            <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
                            <input type="hidden" name="gia_sp" value="' . $gia_sp . '">
                            <input type="hidden" name="anh_sp" value="' . $anh_sp . '">
                            <input type="hidden" name="id" value="' . $id_sp . '">
                                           
                                        </div>
                                        
                                    </div>
                                   
                                    </form>
                  ';
                        $i += 1;
                    }
                    ?>

                </div>
            </div><!-- Products Wrap -->
        </div>
    </div>
</section>
<!-- logo -->
<section>
    <div class="w-100 pt-80 bg-color5 pb-80 position-relative">
        <div class="container">
            <div class="sponsors-wrap position-relative w-100">
                <div class="row align-items-center mrg30">
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid"
                                    src="assets/images/resources/spnsr-img1-1.png" alt="Sponsor Image 1"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid"
                                    src="assets/images/resources/spnsr-img1-2.png" alt="Sponsor Image 2"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid"
                                    src="assets/images/resources/spnsr-img1-3.png" alt="Sponsor Image 3"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid"
                                    src="assets/images/resources/spnsr-img1-4.png" alt="Sponsor Image 4"></a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="spnsr-item text-center w-100">
                            <a href="javascript:void(0);" title=""><img class="img-fluid"
                                    src="assets/images/resources/spnsr-img1-5.png" alt="Sponsor Image 5"></a>
                        </div>
                    </div>
                </div>
            </div><!-- Sponsors Wrap -->
        </div>
    </div>
</section>


</main>

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
</body>


<!-- Mirrored from php.cwsthemes.com/liami/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jul 2024 15:42:24 GMT -->
</php>