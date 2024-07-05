<?php
include "../Template/header.php";
?>
<div id="carouselExampleIndicators" class="carousel slide custom-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../Assets/img/Camera-fpt-banner-1024x379-1.png" class="d-block" alt="">
        </div>
        <div class="carousel-item">
            <img src="../Assets/img/internet-fpt-vung-tau-1-1536x476.webp" class="d-block" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="featured-products py-5">
    <div class="container">
        <h2 class="text-center mb-4">Các gói cước nổi bật</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gói cước cá nhân</h5>
                        <p class="card-text">Gói cước dành cho cá nhân sử dụng Internet tốc độ cao.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gói cước doanh nghiệp</h5>
                        <p class="card-text">Gói cước dành cho doanh nghiệp với nhu cầu sử dụng Internet lớn.</p>
                        <a href="#" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gói cước gia đình</h5>
                        <p class="card-text">Gói cước phù hợp cho gia đình sử dụng Internet và truyền hình cáp.</p>
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