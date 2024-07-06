<?php
// Bao gồm file cấu hình cơ sở dữ liệu
include "../config/db.php";

// Khởi tạo các biến
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Xử lý dữ liệu biểu mẫu khi biểu mẫu được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Kiểm tra nếu tên đăng nhập trống
    if (empty(trim($_POST["username"]))) {
        $username_err = "Vui lòng nhập tên đăng nhập.";
    } else {
        // Chuẩn bị câu lệnh truy vấn để kiểm tra sự tồn tại của tên đăng nhập
        $sql = "SELECT user_id FROM Users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Liên kết biến với câu lệnh đã chuẩn bị như tham số
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Thiết lập tham số
            $param_username = trim($_POST["username"]);

            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if (mysqli_stmt_execute($stmt)) {
                // Lưu kết quả
                mysqli_stmt_store_result($stmt);

                // Kiểm tra nếu tên đăng nhập đã tồn tại
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "Tên đăng nhập này đã được sử dụng.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Đóng câu lệnh
            mysqli_stmt_close($stmt);
        }
    }

    // Kiểm tra nếu mật khẩu trống
    if (empty(trim($_POST["password"]))) {
        $password_err = "Vui lòng nhập mật khẩu.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Mật khẩu phải có ít nhất 6 ký tự.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Kiểm tra nếu xác nhận mật khẩu trống
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Vui lòng xác nhận mật khẩu.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Mật khẩu không khớp.";
        }
    }

    // Kiểm tra và chèn dữ liệu vào cơ sở dữ liệu nếu không có lỗi
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Chuẩn bị câu lệnh chèn vào cơ sở dữ liệu
        $sql = "INSERT INTO Users (username, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Liên kết biến với câu lệnh đã chuẩn bị như tham số
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Thiết lập tham số
            $param_username = $username;
            $param_password = md5($password); // Mã hoá mật khẩu

            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if (mysqli_stmt_execute($stmt)) {
                // Đăng ký thành công, chuyển hướng người dùng đến trang đăng nhập
                header("location: login.php");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Đóng câu lệnh
            mysqli_stmt_close($stmt);
        }
    }

    // Đóng kết nối
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    .wrapper {
        width: 360px;
        margin: 0 auto;
        margin-top: 50px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .invalid-feedback {
        color: red;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2 class="text-center mb-4">Đăng ký tài khoản</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" name="username"
                    class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                    value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password"
                    class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input type="password" name="confirm_password"
                    class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Đăng ký">
            </div>
            <p>Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a>.</p>
        </form>
    </div>
    <!-- Bootstrap JS và các thư viện khác -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>