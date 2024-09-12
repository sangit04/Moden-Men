<main>
    <section>
        <form action="momo.php" method="post" class="container">
            <div class="w-100 pt-60 pb-120 position-relative">
                <div class="checkout-wrap position-relative w-100">
                    <div class="row mrg30">
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="checkout-form w-100">
                                <h3>Chi tiết hóa đơn</h3>
                                <div class="row mrg30">

                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Họ và tên *</label>
                                            <input required type="text" name="full-name" class="form--control"
                                                id="first-name" placeholder="Nhập họ và tên">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Email *</label>
                                            <input required type="email" name="email" class="form--control" id="email"
                                                placeholder="Nhập email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Địa chỉ *</label>
                                            <input required type="text" name="address" class="form--control"
                                                placeholder="Nhập địa chỉ muốn nhận" id="address">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Số điện thoại *</label>
                                            <input required type="tel" name="tel" class="form--control" id="tel"
                                                placeholder="Nhập số điện thoại">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="field-box v2 position-relative w-100">
                                            <label>Ghi chú</label>
                                            <textarea name="note" placeholder="Ghi chú đơn hàng"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-6">
                            <div class="cart-total v2 w-100">
                                <h4>Đơn hàng của bạn</h4>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th>số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $tongtien = 0;
                                        foreach ($listgiohang as $item) {
                                            $tong = $item['gia_sp'] * $item['so_luong'];
                                            $tongtien += $tong;
                                            $tongtien_format = number_format($tongtien, 0, ',', '.');
                                            $tong_format = number_format($tong, 0, ',', '.');
                                            echo "<tr>
                                                    <td><img class='img-fluid w-30' src='{$item['anh_sp']}'><span>{$item['ten_sp']}</span></td>
                                                    <td><span>[{$item['so_luong']}]</span></td>
                                                    <td><span class='price'>{$item['gia_sp']} VND</span></td>
                                                  </tr>";
                                        }
                                        echo "<tr>
                                                <td colspan='2'>Tổng tiền</td>
                                                <td><strong class='price'>{$tongtien_format} VND</strong></td>
                                              </tr>";
                                        ?>
                                    </tbody>
                                </table>
                                <input type="hidden" name="total" value="<?= $tongtien ?>">

                                <button class="theme-btn bg-color4" type="submit" name="thanhtoan">Thanh toán trực
                                    tiếp<span></span><span></span><span></span><span></span></button>
                                <button name="payUrl" type="submit" class="theme-btn bg-color1"> Thanh toán qua
                                    momo<span></span><span></span><span></span><span></span></button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>