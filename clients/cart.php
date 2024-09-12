<main>

    <section>
        <div class="w-100 pt-60 pb-120 position-relative">
            <div class="container">
                <div class="sec-title2 d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                    <h3 class="mb-0">Your Cart</h3>
                    <a href="index.php?act=clear_cart" class="theme-btn mid-btn bg-color1 brd-btn">Clear
                        Cart<span></span><span></span><span></span><span></span"></a>
                </div><!-- Section Title 2 -->
                <div class="cart-wrap position-relative w-100">

                    <table class="cart-table w-100">
                        <thead>
                            <tr>
                                <th>action</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tongtien = 0;

                            foreach ($listgiohang as $item) {
                                $tong = $item['gia_sp'] * $item['so_luong'];
                                $tongtien += $tong;
                                $gia_spsp = number_format($item['gia_sp'], 0, ',', '.');
                                $tong_format = number_format($tong, 0, ',', '.');
                                echo "<tr class='cart-item'>
                            <td><button class='remove-product d-inline-block rounded-circle' onclick='deleteItem({$item['id']});'><i class='fi fi-rr-cross-small'></i></button></td>
                            <div class='cart-product-box d-flex flex-wrap align-items-center'>
                                <td><div class='cart-product-img overflow-hidden'><img class='img-fluid w-100 mt-3 rounded-circle' src='{$item['anh_sp']}' alt='{$item['ten_sp']}'></div></td>
                                 
                                <td><span class='text-capitalize'>{$item['ten_sp']}</span></td>
                                </div>
                            
                                <td><span class='price'>$gia_spsp</span></td>
                            <td>
                                <form id='form-{$item['id']}' action='update_cart.php' method='POST'>
                                    <input type='hidden' name='id' value='{$item['id']}'>
                                    <div class='mini-cart-btm d-flex flex-wrap align-items-center justify-content-between'>
                                     <div class='product-quanty'><input type='number' class='qty' value='{$item['so_luong']}' name='so_luong'></div>
                                </form>
                            </td>
                            <td>{$tong_format} VND</td>
                        </tr>";
                                // var_dump($tongtien_format);
                            }
                            echo '<tr>
                                            <td colspan="5" style="color: red;">Thành tiền</td>
                           <td><span class="price text-color1">' .  $tongtien_format = number_format($tongtien, 0, ',', '.') . 'đ <a href="index.php?act=checkout" class="theme-btn bg-color1" type="submit">Thanh toán<span></span><span></span><span></span><span></span></a ></span></td>
                                        </tr>';
                            ?>

                        </tbody>

                    </table>

                    </form>
                </div><!-- Cart Wrap -->
            </div>
        </div>
    </section>
</main><!-- Main Wrapper -->
<script>
    function deleteItem(itemId) {
        if (confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng không?')) {
            window.location.href = `index.php?act=delete_one_cart&id=${itemId}`;
        }

    }
</script>