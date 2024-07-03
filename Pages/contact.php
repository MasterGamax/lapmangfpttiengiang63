<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ - FPT Store</title>
    <!-- Link CSS của Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link CSS tùy chỉnh -->
    <link rel="stylesheet" href="../Assets/css/style.css">
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
                            <li class="list-inline-item"><a href="./product.php" class="text-white">Sản phẩm</a></li>
                            <li class="list-inline-item"><a href="contact.php" class="text-white">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="contact-form py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="text-center mb-4">Liên hệ với chúng tôi</h2>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên của bạn">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Nhập địa chỉ email của bạn">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Nội dung</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Nhập nội dung tin nhắn của bạn"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi tin nhắn</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; 2024 FPT Store. All rights reserved.</p>
        </div>
    </footer>

    <!-- Link JavaScript của Bootstrap 5 từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>