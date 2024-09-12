<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title">Tất cả sản phẩm</h1>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row ">
        <div class="col-lg-2 mt-4">
            <div class="left-sidebar">
                <span class="close-sidebar d-lg-none d-block">
                    <i class="las la-times"></i>
                </span>
                <h6 class="sidebar-item__title">
                    Danh mục
                </h6>
                <div class="sidebar-item">
                    <?php
                    $i = 0;
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&id_dm=" . $id_dm;
                        echo ' 
                    <div class="form-check form--check">
                    <a href=" ' . $linkdm . '">' . $ten_danh_muc . '</a>
                </div></label>';
                    }
                    ?>
                </div>

            </div>

            <div class="sidebar-item text-center">
                <h6 class="sidebar-item__title mt-3">
                    Top 5 Sản Phẩm Yêu Thích
                </h6>
                <?php
                $i = 0;
                foreach ($dstop5 as $sp) {
                    extract($sp);
                    $hinhpath = "../upload/";
                    $anh_sp = $hinhpath . $anh_sp;
                    $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                    echo '<a href="' . $linksp . '" class="seller-item__thumb">
                    <img src="' . $anh_sp . '" alt=""  class="rounded-5">
                </a>
                <div class="seller-item__title">
                    <a href="' . $linksp . 'p" class="seller-item__link">' . $ten_sp . '</a>
                  
                </div>';
                }
                ?>

            </div>

        </div>
        <div class="col-lg-10 mt-4">
            <div class="products-wrap position-relative w-100">
                <div class="row mrg30">
                    <?php
                    if (isset($listsanpham) && !empty($listsanpham)) {
                        foreach ($listsanpham as $sp) {
                            extract($sp);
                            $hinhpath = "../upload/";
                            $anh_sp = $hinhpath . $anh_sp;

                            $linksp = "index.php?act=sanphamct&id_sp=" . $id_sp;
                            // var_dump($anh_sp);

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
                                                <div class="products-color d-flex justify-content-center">
                                               
                                            </div>
                                            
                                           
                                            </div>
                                                 <input type="submit" value="THÊM VÀO GIỎ HÀNG" name="buy" class="theme-btn mid-btn bg-color4">
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
                    } else {
                        echo '<h1 class="text-center mt-5 text-info">Không có sản phẩm nào</h1>';
                    }
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>