<?php
session_start();

// Bao gồm file cấu hình cơ sở dữ liệu
include "../config/db.php";

// Khởi tạo biến
$username = $password = "";
$username_err = $password_err = "";

// Xử lý dữ liệu biểu mẫu khi biểu mẫu được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Kiểm tra nếu tên đăng nhập trống
    if (empty(trim($_POST["username"]))) {
        $username_err = "Vui lòng nhập tên đăng nhập.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Kiểm tra nếu mật khẩu trống
    if (empty(trim($_POST["password"]))) {
        $password_err = "Vui lòng nhập mật khẩu.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Xác thực thông tin đăng nhập
    if (empty($username_err) && empty($password_err)) {
        // Chuẩn bị câu lệnh truy vấn
        $sql = "SELECT user_id, username, password FROM Users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Liên kết biến với câu lệnh đã chuẩn bị như tham số
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Thiết lập tham số
            $param_username = $username;

            // Cố gắng thực thi câu lệnh đã chuẩn bị
            if (mysqli_stmt_execute($stmt)) {
                // Lưu kết quả
                mysqli_stmt_store_result($stmt);

                // Kiểm tra nếu tên đăng nhập tồn tại, nếu có thì xác thực mật khẩu
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Liên kết các biến kết quả
                    mysqli_stmt_bind_result($stmt, $user_id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (md5($password) == $hashed_password) {
                            // Mật khẩu đúng, bắt đầu một session mới
                            session_start();

                            // Lưu trữ dữ liệu trong biến session
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $user_id;
                            $_SESSION["username"] = $username;

                            // Chuyển hướng đến trang chào mừng
                            header("Location: welcome.php");
                        } else {
                            // Hiển thị một thông báo lỗi nếu mật khẩu không hợp lệ
                            $password_err = "Mật khẩu không hợp lệ.";
                        }
                    }
                } else {
                    // Hiển thị một thông báo lỗi nếu tên đăng nhập không tồn tại
                    $username_err = "Không tìm thấy tài khoản với tên đăng nhập này.";
                }
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
    <title>Đăng nhập</title>
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
        <h2 class="text-center mb-4">Đăng nhập</h2>
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
                <input type="submit" class="btn btn-primary" value="Đăng nhập">
            </div>
            <p>Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a>.</p>
        </form>
    </div>
    <!-- Bootstrap JS và các thư viện khác -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>