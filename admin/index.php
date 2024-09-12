<?php
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/cart.php";
include("header.php");
include("boxleft.php");
include "../model/pdo.php";
?>
<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";

            break;

        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {

                $ten_danh_muc = $_POST['ten_danh_muc'];
                $mo_ta = $_POST['mo_ta'];
                $trang_thai = $_POST['trang_thai'];

                insert_danhmuc($ten_danh_muc, $mo_ta, $trang_thai);
                $thongbao = "Thêm thành công";
            }

            include "danhmuc/add.php";
            break;
        case 'xoadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                delete_danhmuc($_GET['id_dm']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id_dm']) && ($_GET['id_dm'] > 0)) {
                $dm = loadone_danhmuc($_GET['id_dm']);
            }

            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {

                $id_dm = $_POST['id_dm'];
                $ten_danh_muc = $_POST['ten_danh_muc'];
                $mo_ta = $_POST['mo_ta'];
                $trang_thai = $_POST['trang_thai'];
                update_danhmuc($id_dm, $ten_danh_muc, $mo_ta, $trang_thai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            // $listsanpham = loadall_sanpham("", 0);
            include "danhmuc/list.php";
            break;
        case 'listsp':
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

        case 'addsp':
            // var_dump($_FILES['hinh']);die();
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_dm = $_POST['id_dm'];
                $ten_sp = $_POST['ten_sp'];
                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $so_luong = $_POST['so_luong'];

                $thong_tin_sp = isset($_POST['thong_tin_sp']) ? $_POST['thong_tin_sp'] : '';
                $mau_sac = $_POST['mau_sac'];

                $gia_sp = $_POST['gia_sp'];
                $trang_thai = $_POST['trang_thai'];

                insert_sanpham($id_dm, $ten_sp, $anh_sp, $so_luong, $thong_tin_sp, $mau_sac, $gia_sp, $trang_thai);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            // $listsanpham = loadall_sanpham($kyw, $id_dm=0);
            include "sanpham/add.php";
            break;
        case 'xoasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                delete_sanpham($_GET['id_sp']);
            }


            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $tb_san_pham = loadone_sanpham($_GET['id_sp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id_sp = $_POST['id_sp'];
                $trang_thai = $_POST['trang_thai'];
                $id_dm = $_POST['id_dm'];
                $ten_sp = $_POST['ten_sp'];
                $anh_sp = $_FILES['anh_sp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["anh_sp"]["name"]);
                if (move_uploaded_file($_FILES["anh_sp"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                $so_luong = $_POST['so_luong'];

                $thong_tin_sp = isset($_POST['thong_tin_sp']) ? $_POST['thong_tin_sp'] : '';
                $mau_sac = $_POST['mau_sac'];

                $gia_sp = $_POST['gia_sp'];

                update_sanpham($id_sp, $id_dm, $ten_sp, $anh_sp, $so_luong, $thong_tin_sp, $mau_sac, $trang_thai, $gia_sp);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;




        case 'listtk':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $role = $_POST['role'];
            } else {
                $kyw = '';
                $role = 0;
            }

            $listtaikhoan = loadall_taikhoan($kyw, $role);
            include "taikhoan/list.php";
            break;


        case 'xoatk':
            if (isset($_GET['id_nguoidung']) && ($_GET['id_nguoidung'] > 0)) {
                delete_taikhoan($_GET['id_nguoidung']);
            }


            $listtaikhoan = loadall_taikhoan("", 0);
            include "taikhoan/list.php";
            break;


        case 'listhd':

            $listhd = loadall_hoa_don();
            include "hoadon/list.php";
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
                    case '4':
                        $trangthainame = "Thành công";
                        break;
                }
            }

            include "hoadon/chitiet.php";
            break;


        case 'suahd':
            if (isset($_GET['id_hoa_don']) && ($_GET['id_hoa_don'])) {
                $chitiet = load_bill_total($_GET['id_hoa_don']);
            }

            include "hoadon/trangthaihd.php";
            break;
        case 'updatedh':
            if (isset($_GET['capnhat']) && ($_GET['capnhat'])) {

                $id_hoa_don = $_POST['id_hoa_don'];
                $ten_sp = $_POST['$ten_sp'];
                $anh_sp = $_POST['$anh_sp'];
                $so_luong_mua = $_POST['$so_luong_mua'];
                $gia_sp = $_POST['$gia_sp'];
                $trang_thai = $_POST['$trang_thai'];
                update_trangthai($id_hoa_don, $ten_sp, $anh_sp, $so_luong_mua, $gia_sp, $trang_thai);
            }
            include "hoadon/chitiet.php";
            break;
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'adddh':
            include "donhang/add.php";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['trangthaiupdate'])) {
    $status = $_POST['status'];
    $id_hoa_don = isset($_POST['id']) ? $_POST['id'] : null;

    if ($id_hoa_don) {
        update_bill_status($id_hoa_don, $status);
        echo '<script type="text/javascript">
            document.location = "index.php?act=chitiet_hoadon&id=' . $id_hoa_don . '";
        </script>';
    } else {
        // Print an error message
        echo "Invalid or missing id_hoa_don";
    }
}

?>





<?php
include("footer.php");
?>