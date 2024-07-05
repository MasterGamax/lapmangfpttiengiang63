<?php
// Bao gồm file db.php để sử dụng kết nối cơ sở dữ liệu
include 'db.php';

// Tạo bảng người dùng
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql)) {
    echo "Table users created successfully";
} else {
    echo "ERROR: Could not create table. " . mysqli_error($link);
}

// Đóng kết nối
mysqli_close($link);
