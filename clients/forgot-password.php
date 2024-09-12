<main>
    <section>
        <form class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100"
            action="index.php?act=quenmk" method="POST">
            <div class="lg-rg-img position-relative">
                <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
                <div class="logo">
                    <h1 class="mb-0"><a href="index-2.html" title="Home"><img src="assets/images/logo.svg"
                                alt="Logo"></a></h1>
                </div><!-- Logo -->
            </div>
            <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
                <div class="lg-rg-form-inner w-100">
                    <h2 class="mb-0">Quên mật khẩu?</h2>
                    <p class="mb-3">Nhập địa chỉ email bạn đã sử dụng khi tham gia</p>
                    <form>
                        <div class="field-box v2 position-relative w-100">
                            <label>Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div
                            class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                            <input class="theme-btn bg-color1 mb-3" name="quenmatkhau" type="submit"
                                value="Gui"><span></span><span></span><span></span><span></span></input>
                        </div>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                </div>
            </div>
        </form><!-- Login & Register Wrap -->
    </section>
</main><!-- Main Wrapper -->