<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Shop Laptop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f5f5;
        }

        .navbar {
            background: #000;
        }

        .navbar a {
            color: white !important;
        }

        .banner {
            background: url('https://images.unsplash.com/photo-1517336714731-489689fd1ca8') no-repeat center;
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .banner h1 {
            background: rgba(0,0,0,0.6);
            padding: 10px 20px;
            border-radius: 10px;
        }

        .card {
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .price {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- MENU -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-white" href="#">💻 SHOP LAPTOP</a>

        <div>
            <a class="me-3" href="#">Trang chủ</a>
            <a class="me-3" href="#">Sản phẩm</a>
            <a class="me-3" href="#">Giỏ hàng</a>
            <a href="#">Liên hệ</a>
        </div>
    </div>
</nav>

<!-- BANNER -->
<div class="banner">
    <h1>🔥 Laptop xịn - Giá sinh viên</h1>
</div>

<!-- SẢN PHẨM -->
<div class="container mt-5">

    <div class="row g-4 mt-2">

        <!-- SP 1 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('img/lap1.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Laptop Gaming</h5>
                    <p class="price">20.000.000đ</p>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
        </div>

        <!-- SP 2 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('img/lap2.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Macbook Pro</h5>
                    <p class="price">35.000.000đ</p>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
        </div>

        <!-- SP 3 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('img/lap3.jpg') }}" class="card-img-top">
                <div class="card-body text-center">
                    <h5>Laptop Văn Phòng</h5>
                    <p class="price">12.000.000đ</p>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
        </div>
 <!-- SP 4 -->
    <div class="col-md-4">
        <div class="card shadow">
            <img src="{{ asset('img/lap4.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
                <h5>Asus Gaming</h5>
                <p class="price">18.000.000đ</p>
                <button class="btn btn-primary">Mua ngay</button>
            </div>
        </div>
    </div>

    <!-- SP 5 -->
    <div class="col-md-4">
        <div class="card shadow">
            <img src="{{ asset('img/lap5.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
                <h5>Dell XPS</h5>
                <p class="price">25.000.000đ</p>
                <button class="btn btn-primary">Mua ngay</button>
            </div>
        </div>
    </div>

    <!-- SP 6 -->
    <div class="col-md-4">
        <div class="card shadow">
            <img src="{{ asset('img/lap6.jpg') }}" class="card-img-top">
            <div class="card-body text-center">
                <h5>HP Pavilion</h5>
                <p class="price">15.000.000đ</p>
                <button class="btn btn-primary">Mua ngay</button>
            </div>
        </div>
    </div>
    </div>

</div>

<!-- FOOTER -->
<div class="text-center mt-5 p-3 bg-dark text-white">
    © 2026 Shop Laptop - vinvin
</div>

</body>
</html>