<?php
include "header.php";

?>
<main>

    <section>
        <div class="page-top-wrap w-100 pt-30 bg-color22 pb-110 position-relative">
            <div class="fixed-bg" style="background-image: url(assets/images/top-banner-bg.jpg);"></div>
            <div class="container">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index-2.html" title="">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Liên Hệ</li>
                </ol>
                <div class="page-title w-100">
                    <h2 class="mb-0">Liên Hệ</h2>
                </div><!-- Page Title -->
            </div>
        </div>
    </section>
    <section>
        <div class="w-100 pt-120 pb-120 position-relative">
            <div class="container">
                <div class="contact-wrap position-relative w-100">
                    <div class="contact-info-map bg-color5 position-relative w-100">
                        <div class="row mrg">
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="contact-info position-relative w-100">
                                    <h3>Việt Nam</h3>
                                    <ul class="contact-info-list d-flex flex-wrap list-unstyled mb-0">
                                        <li>
                                            <span class="d-block">Số điện thoại</span>
                                            <p class="mb-0"><a href="tel:(302) 555-0107" title="">(+84) 555-0107</a></p>
                                            <p class="mb-0"><a href="tel:(225) 555-0118" title="">(+84) 555-0118</a></p>
                                        </li>
                                        <li>
                                            <span class="d-block">Địa chỉ</span>
                                            <p class="mb-0">Trụ sở chính Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam
                                                Từ Liêm, Hà Nội</p>
                                        </li>
                                        <li>
                                            <span class="d-block">Email</span>
                                            <p class="mb-0"><a href="mailto:gmail@gmail.com"
                                                    title="">mordem@gmail.com</a></p>
                                        </li>
                                        <li>
                                            <span class="d-block">Mạng xã hội</span>
                                            <div class="social-links d-flex flex-wrap">
                                                <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a href="https://www.instagram.com/" title="Instagram"
                                                    target="_blank"><i class="fab fa-instagram"></i></a>
                                                <a href="https://www.twitter.com/" title="Twitter" target="_blank"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a href="https://www.youtube.com/" title="Youtube" target="_blank"><i
                                                        class="fab fa-youtube"></i></a>
                                                <a href="https://www.pinterest.com/" title="Pinterest"
                                                    target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="map-box w-100">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7447.73385419754!2d105.74070321333704!3d21.038009935841387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454962c0b6523%3A0x5c76c67564d9d1b9!2zUC4gVHLhu4tuaCBWxINuIELDtCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1722488515324!5m2!1svi!2s"
                                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div><!-- Contact Information & Map -->
                    <div class="contact-form-wrap mt-60 bg-color5 position-relative w-100">
                        <div class="row mrg">
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <img class="img-fluid w-100" src="assets/images/resources/contact-img.jpg"
                                    alt="Contact Image">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-6">
                                <div class="contact-form w-100">
                                    <h3>Liên hệ với chúng tôi</h3>
                                    <p class="mb-0">Hãy điền vào form dưới đây.</p>
                                    <form action="#" method="post" id="email-form">
                                        <div class="form-group w-100">
                                            <div class="response w-100"></div>
                                        </div>
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Số điện thoại *</label>
                                            <input class="phone" type="tel" name="phone" required
                                                placeholder="Nhập số điện thoại">
                                        </div>
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Email *</label>
                                            <input class="email" type="email" name="email" required
                                                placeholder="Nhập email">
                                        </div>
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Ghi chú *</label>
                                            <textarea class="contact_message" name="contact_message"
                                                placeholder="Viết ghi chú" required></textarea>
                                        </div>
                                        <div class="field-btn w-100">
                                            <button class="theme-btn bg-color1" id="submit" type="submit">Gửi
                                                ngay<span></span><span></span><span></span><span></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Contact Form Wrap -->
                </div><!-- Contact Wrap -->
            </div>
        </div>
    </section>

</main>
<?php
include "footer.php";
?>