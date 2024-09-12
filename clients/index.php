<?php
session_start();

include "../model/pdo.php";
include "header.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/cart.php";

include "../global.php";

$listsanpham = loadall_sanpham($kyw = 1, $id_dm = 9);


$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop4 = loadall_sanpham_top4();
$dstop5 = loadall_sanpham_top5();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['kyw']) && !empty($_POST['kyw'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                $id_dm = $_GET['id_dm'];
            } else {
                $iddm = 0;
            }
            $listsanpham = loadall_sanpham($kyw, $id_dm);
            include "sanpham.php";

            break;
        case 'search_key':
            if (isset($_POST['kyw']) && !empty($_POST['kyw'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listsanpham = loadall_sanpham($kyw);
            include "sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id_sp = $_GET['id_sp'];
                $onesp = loadone_sanpham($id_sp);
                extract($onesp);
                $sp_cungloai = load_sanpham_cungloai($id_sp, $id_dm);
                include "product-detail.php";
            } else {
                include "home.php";
            }

            break;

        case 'allsanpham':
            $loadAllsp = loadall_sanpham_home();
            include "sanphamAll.php";

            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_nguoidung = $_POST['id_nguoidung'];
                $ten_nguoidung = $_POST['ten_nguoidung'];
                $mat_khau = $_POST['mat_khau'];
                $gmail = $_POST['gmail'];

                update_taikhoan($id_nguoidung, $ten_nguoidung, $mat_khau, $gmail);
                $_SESSION['ten_nguoidung'] = checkuser($ten_nguoidung, $mat_khau);
                "Location: index.php?act=edit_taikhoan";
            }
            include "edit_taikhoan.php";
            break;
        case 'quenmk':
            if (isset($_POST['quenmatkhau']) && ($_POST['quenmatkhau'])) {

                $gmail = $_POST['email'];
                $checkemail = checkemail($gmail);
                if (is_array($checkemail)) {
                    $thongbao = "Tên người dùng của bạn là: " . $checkemail['ten_nguoidung'] . "<br>" . "Mật khẩu của bạn là: " . $checkemail['mat_khau'];
                } else {
                    $thongbao = "Gmail này không tồn tại";
                }
            }
            include "forgot-password.php";
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $ten_nguoidung = $_POST['ten_nguoidung'];
                $mat_khau = $_POST['mat_khau'];
                $checkuser = checkuser($ten_nguoidung, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION['ten_nguoidung'] = $checkuser;
                    "Location: index.php?act=login";
                } else {
                    $thongbao = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký !";
                }
            }
            include "login.php";
            break;

        case 'logout':
            if (isset($_SESSION['ten_nguoidung'])) {
                unset($_SESSION['ten_nguoidung']);
                "Location: index.php?act=login";
            }
            break;
        case 'listhd':
            $id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
            $listBill = loadone_bill_user($id_nguoidung);
            include "donhang.php";
            break;
        case "chitiet_hoadon":
            if (isset($_GET['id']) && ($_GET['id'])) {
                $chitiet = load_bill_detail($_GET['id']);
                $hoadon = load_bill_total($_GET['id']);
                $listBill = load_bill_total($_GET['id']);
                $trangthaihoadon = $hoadon[0]['trang_thai'];
                $trangthainame = '';
                switch ($trangthaihoadon) {
                    case '-1':
                        $trangthainame = "đã hủy";
                        break;
                    case '0':
                        $trangthainame = "chờ xác nhận";
                        break;
                    case '1':
                        $trangthainame = "đã xác nhận";
                        break;
                    case '2':
                        $trangthainame = "đang giao hàng";
                        break;
                    case '3':
                        $trangthainame = "đã nhận hàng";
                        break;
                }
            }

            include "chitiet.php";
            break;
        case "view_cart":
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "add_to_cart":
            if (isset($_POST['themgiohang']) && ($_POST['themgiohang'])) {
                $id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
                $id_sp = $_POST['id'];
                $ten_sp = $_POST['ten_sp'];
                $anh_sp = $_POST['anh_sp'];
                $gia_sp = $_POST['gia_sp'];
                $so_luong = $_POST['so_luong'];
                $listgiohang = loadall_giohang();
                $update = false;
                foreach ($listgiohang as $item) {
                    if ($item['id_sp'] == $id_sp) {
                        $update = true;
                        $new_quantity = $item['so_luong'] + $so_luong;
                        update_giohang($id_sp, $new_quantity);
                        break;
                    }
                }
                if (!$update) {
                    insert_giohang($id_nguoidung, $id_sp, $ten_sp, $anh_sp, $gia_sp, $so_luong);
                }
            }
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;

        case "delete_one_cart":
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_giohang($_GET['id']);
            }
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "clear_cart":
            delete_cart($id_nguoidung);
            $listgiohang = loadall_giohang();
            include "cart.php";
            break;
        case "checkout":
            $listgiohang = loadall_giohang();
            include "checkout.php";
            break;
        case 'trangthaihuy':
            if (isset($_GET['id']) && ($_GET['id'])) {
                update_bill_status($_GET['id'], -1);
            }
            echo '<script type="text/javascript">
                    document.location = "index.php?act=listhd";
                </script>';
            break;
        case 'trangthaithanhcong':
            if (isset($_GET['id']) && ($_GET['id'])) {
                update_bill_status($_GET['id'], 3);
            }
            echo '<script type="text/javascript">
                        document.location = "index.php?act=listhd";
                    </script>';
            break;
        case "done_momo":
            if (isset($_GET['partnerCode']) && isset($_GET['orderId']) && isset($_GET['resultCode']) && $_GET['resultCode'] == '0') {
                $extraData = json_decode($_GET['extraData'], true);
                // var_dump($extraData);
                $id_nguoidung = $extraData['id_nguoidung'];
                $name = $extraData['name'];
                $tel = $extraData['tel'];
                $email = $extraData['email'];
                $address = $extraData['address'];
                $note = $extraData['note'];
                $tong_gia = $extraData['tong_gia'];

                // Insert hóa đơn
                insert_hoadon($id_nguoidung, $name, $tong_gia, $address, $note, 1);
                $bill = loadone_bill_user($id_nguoidung);
                $id_hoa_don = $bill[0]['id_hoa_don'];
                if (isset($id_nguoidung)) {
                    $listCart = loadall_cart($id_nguoidung);
                }
                foreach ($listCart as $cart) {
                    $ten_sp = $cart['ten_sp'];
                    $anh_sp = $cart['anh_sp'];
                    $gia_sp = $cart['gia_sp'];
                    $so_luong = $cart['so_luong'];
                    insert_hoadon_chitiet($id_hoa_don, $ten_sp, $anh_sp, $so_luong, $gia_sp, 0);
                }
                delete_cart($id_nguoidung);

                include "Pay-succsec.php";
            } else {
                echo "Thanh toán thất bại!";
            }
            break;
        case "pay":
            if (isset($_POST['thanhtoan'])) {
                $id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
                $name = $_POST['full-name'];
                // var_dump($name);
                // die;
                $tel = $_POST['tel'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $tong_gia = $_POST['total'];

                insert_hoadon($id_nguoidung, $name, $tong_gia, $address, $note, 0);
                $bill = loadone_bill_user($id_nguoidung);
                $id_hoa_don = $bill[0]['id_hoa_don'];
                if (isset($id_nguoidung)) {
                    $listCart = loadall_cart($id_nguoidung);
                }
                foreach ($listCart as $cart) {
                    $ten_sp = $cart['ten_sp'];
                    $anh_sp = $cart['anh_sp'];
                    $gia_sp = $cart['gia_sp'];
                    $so_luong = $cart['so_luong'];
                    insert_hoadon_chitiet($id_hoa_don, $ten_sp, $anh_sp, $so_luong, $gia_sp, 0);
                }
                delete_cart($id_nguoidung);
                include "Pay-succsec.php";
            }

            break;

        case 'tim_kiem':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_dm = $_POST['id_dm'];
            } else {
                $kyw = '';
                $id_dm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $id_dm);
            include "sanpham/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
