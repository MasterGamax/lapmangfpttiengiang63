<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm - FPT Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/css/style.css">
    <style>
        .product-card {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
            transition: box-shadow 0.3s;
        }

        .product-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-card .card-body {
            padding: 20px;
        }

        .product-card .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .product-card .price {
            font-size: 1.25rem;
            font-weight: bold;
            color: #ff5e00;
            margin-bottom: 10px;
        }

        .product-card .btn {
            background-color: #ff5e00;
            border-color: #ff5e00;
            color: #fff;
        }

        .product-card .btn:hover {
            background-color: #ff8c42;
            border-color: #ff8c42;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img src="https://fptcore.com/lapmangtiengiang-com/wp-content/uploads/sites/798/2021/07/CGSQtFPgvd7HKMXvon4l.png" alt="FPT Logo">
                </div>
                <div class="col-md-6">
                    <nav>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.php" class="text-white">Trang chủ</a></li>
                            <li class="list-inline-item"><a href="products.php" class="text-white">Sản phẩm</a></li>
                            <li class="list-inline-item"><a href="contact.php" class="text-white">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="products-list py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gói cước gia đình</h5>
                            <p class="price">$29.99/tháng</p>
                            <p class="card-text">Mô tả ngắn về sản phẩm này.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gói cước cá nhân</h5>
                            <p class="price">$29.99/tháng</p>
                            <p class="card-text">Mô tả ngắn về sản phẩm này.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gói cước doanh nghiệp</h5>
                            <p class="price">$99.99/tháng</p>
                            <p class="card-text">Mô tả ngắn về sản phẩm này.</p>
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 FPT Store. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>