<?php
// Thông tin cấu hình kết nối
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');

// Kết nối với MySQL
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Kiểm tra kết nối
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Lệnh tạo cơ sở dữ liệu
$sql = "CREATE DATABASE lapmagfpttiengiang63";

// Thực thi lệnh tạo cơ sở dữ liệu
if (mysqli_query($link, $sql)) {
    echo "Database created successfully";
} else {
    echo "ERROR: Could not create database. " . mysqli_error($link);
}

// Đóng kết nối
mysqli_close($link);
