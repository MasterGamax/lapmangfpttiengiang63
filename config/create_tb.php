<?php
include "db.php";

// Tạo bảng Users
$sql = "CREATE TABLE IF NOT EXISTS Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    address VARCHAR(255),
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (mysqli_query($link, $sql)) {
    echo "Table Users created successfully.\n";
} else {
    echo "ERROR: Could not create table Users. " . mysqli_error($link) . "\n";
}

// Tạo bảng Categories
$sql = "CREATE TABLE IF NOT EXISTS Categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(50) NOT NULL
)";
if (mysqli_query($link, $sql)) {
    echo "Table Categories created successfully.\n";
} else {
    echo "ERROR: Could not create table Categories. " . mysqli_error($link) . "\n";
}

// Tạo bảng Products
$sql = "CREATE TABLE IF NOT EXISTS Products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES Categories(category_id)
)";
if (mysqli_query($link, $sql)) {
    echo "Table Products created successfully.\n";
} else {
    echo "ERROR: Could not create table Products. " . mysqli_error($link) . "\n";
}

// Tạo bảng Orders
$sql = "CREATE TABLE IF NOT EXISTS Orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total_price DECIMAL(10, 2) NOT NULL,
    order_status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
)";
if (mysqli_query($link, $sql)) {
    echo "Table Orders created successfully.\n";
} else {
    echo "ERROR: Could not create table Orders. " . mysqli_error($link) . "\n";
}

// Tạo bảng Order_Items
$sql = "CREATE TABLE IF NOT EXISTS Order_Items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES Orders(order_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
)";
if (mysqli_query($link, $sql)) {
    echo "Table Order_Items created successfully.\n";
} else {
    echo "ERROR: Could not create table Order_Items. " . mysqli_error($link) . "\n";
}

// Tạo bảng Payments
$sql = "CREATE TABLE IF NOT EXISTS Payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    payment_method VARCHAR(50),
    payment_status VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES Orders(order_id)
)";
if (mysqli_query($link, $sql)) {
    echo "Table Payments created successfully.\n";
} else {
    echo "ERROR: Could not create table Payments. " . mysqli_error($link) . "\n";
}

// Tạo bảng Reviews
$sql = "CREATE TABLE IF NOT EXISTS Reviews (
    review_id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    user_id INT,
    rating INT,
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES Products(product_id),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
)";
if (mysqli_query($link, $sql)) {
    echo "Table Reviews created successfully.\n";
} else {
    echo "ERROR: Could not create table Reviews. " . mysqli_error($link) . "\n";
}

// Tạo bảng Addresses
$sql = "CREATE TABLE IF NOT EXISTS Addresses (
    address_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    address_line1 VARCHAR(255),
    address_line2 VARCHAR(255),
    city VARCHAR(100),
    state VARCHAR(100),
    zip_code VARCHAR(20),
    country VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES Users(user_id)
)";
if (mysqli_query($link, $sql)) {
    echo "Table Addresses created successfully.\n";
} else {
    echo "ERROR: Could not create table Addresses. " . mysqli_error($link) . "\n";
}

// Đóng kết nối
mysqli_close($link);