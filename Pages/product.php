<?php
include "../Template/header.php";
?>
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

<?php
include "../Template/footer.php";
?>