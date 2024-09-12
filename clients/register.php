<?php
include '../model/pdo.php';

$errors = [];
$success = "";
$conn = pdo_get_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($username)) {
        $errors[] = "Tên tài khoản là bắt buộc.";
    }
    if (empty($email)) {
        $errors[] = "Email là bắt buộc.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Định dạng email không hợp lệ.";
    }
    if (empty($password)) {
        $errors[] = "Mật khẩu là bắt buộc.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Mật khẩu phải có ít nhất 6 ký tự.";
    }

    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("SELECT * FROM tb_tai_khoan WHERE email = :email");
            $stmt->execute([':email' => $email]);
            if ($stmt->rowCount() > 0) {
                $errors[] = "Email này đã được sử dụng!";
            } else {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $conn->prepare("INSERT INTO tb_tai_khoan (username, email, password) VALUES (:username, :email, :password)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $passwordHash);
                $stmt->execute();

                $success = "Đăng ký thành công!";
            }
        } catch (PDOException $e) {
            $errors[] = "Lỗi: " . $e->getMessage();
        }
    }
}
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="../assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Morden Men Shop</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <main>
        <section>
            <div class="lg-rg-wrap d-flex flex-wrap align-items-center position-relative w-100">
                <div class="lg-rg-img position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/lg-rg-bg.jpg);"></div>
                </div>
                <div class="lg-rg-form d-flex flex-wrap align-items-center justify-content-center position-relative">
                    <div class="lg-rg-form-top align-items-center justify-content-end d-flex flex-wrap w-100">
                        <p class="mb-0">Đăng nhập tại đây<a class="theme-btn bg-color4" href="login.php" title="">Đăng
                                nhập<span></span><span></span><span></span><span></span></a></p>
                    </div>
                    <div class="lg-rg-form-inner w-100">
                        <h2 class="mb-0">Đăng ký</h2>
                        <p class="mb-0">Nhập thông tin chi tiết của bạn dưới đây</p>
                        <form id="registrationForm" action="" method="POST">
                            <div class="field-box v2 position-relative w-100">
                                <label>Tên tài khoản</label>
                                <input type="text" name="username" id="username" required>
                            </div>
                            <div class="field-box v2 position-relative w-100">
                                <label>Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="field-box v2 position-relative w-100">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" id="password" required>
                            </div>
                            <div class="field-btn d-flex flex-wrap align-items-center justify-content-between position-relative w-100">
                                <button class="theme-btn bg-color1" type="submit">Tạo tài
                                    khoản<span></span><span></span><span></span><span></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            <?php if (!empty($errors)) : ?>
                <?php foreach ($errors as $error) : ?>
                    toastr.error("<?php echo $error; ?>");
                <?php endforeach; ?>
            <?php elseif (!empty($success)) : ?>
                toastr.success("<?php echo $success; ?>");
                $('#registrationForm')[0].reset();
            <?php endif; ?>
        });
    </script>
</body>

</html>