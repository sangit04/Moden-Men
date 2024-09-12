<?php
session_start();
include "../model/pdo.php";
include "../model/cart.php";
include "../global.php";

header('Content-type: text/html; charset=utf-8');

$id_nguoidung = $_SESSION['ten_nguoidung']['id_nguoidung'];
$name = $_POST['full-name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$address = $_POST['address'];
$note = $_POST['note'];
$tong_gia = $_POST['total'];



$endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
$partnerCode = 'MOMOBKUN20180529';
$accessKey = 'klm05TvNBzhg7h7j';
$secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
$orderInfo = "Thanh toán qua MoMo, ID người dùng: " . $id_nguoidung . ", Tổng giá: " . $tong_gia;
$orderId = time() . "";
$redirectUrl = "http://localhost/duan1_nhom12/clients/index.php?act=done_momo";
$ipnUrl = "http://localhost/duan1_nhom12/clients/index.php?act=done_momo";
$extraData = json_encode([
    'id_nguoidung' => $id_nguoidung,
    'name' => $name,
    'tel' => $tel,
    'email' => $email,
    'address' => $address,
    'note' => $note,
    'tong_gia' => $tong_gia,
]);

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

if (isset($_POST['payUrl'])) {
    $requestId = time() . "";
    $requestType = "captureWallet";
    $rawHash = "accessKey=" . $accessKey . "&amount=" . $tong_gia . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
    $signature = hash_hmac("sha256", $rawHash, $secretKey);
    $data = array(
        'partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $tong_gia,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature
    );
    $result = execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true); // decode json

    header('Location: ' . $jsonResult['payUrl']);
}