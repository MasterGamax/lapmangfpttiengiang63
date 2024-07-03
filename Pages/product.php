<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm - FPT Telecom</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 20px;
            font-family: Arial, sans-serif;
        }

        .product-image {
            max-width: 100%;
            height: auto;
        }

        .product-details {
            margin-top: 20px;
        }

        .product-price {
            font-size: 24px;
            color: #ff5e00;
            margin-bottom: 10px;
        }

        .product-description {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #ff5e00;
            border-color: #ff5e00;
        }

        .btn-primary:hover {
            background-color: #ff8c42;
            border-color: #ff8c42;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://via.placeholder.com/400x300" class="product-image img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6">
                <h2>Điện thoại thông minh FPT Telecom</h2>
                <p class="product-price">$499.99</p>
                <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ex a nisl fringilla maximus. Integer nec odio.</p>
                <form action="cart.php" method="POST">
                    <div class="form-group">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="1" min="1">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Thêm vào giỏ hàng</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS và jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>