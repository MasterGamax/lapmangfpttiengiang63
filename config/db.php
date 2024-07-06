<?php
// Thông tin cấu hình kết nối cơ sở dữ liệu
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lapmagfpttiengiang63');

// Thử kết nối với cơ sở dữ liệu MySQL
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kiểm tra kết nối
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
