<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Gaming Laptop Shop</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font đẹp -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <style>
        body {
            background: #0f172a;
            color: white;
            font-family: 'Orbitron', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: #020617;
            border-bottom: 2px solid #7c3aed;
        }

        .navbar a {
            color: #e5e7eb !important;
            transition: 0.3s;
        }

        .navbar a:hover {
            color: #7c3aed !important;
            text-shadow: 0 0 10px #7c3aed;
        }

        /* LOGO */
        .navbar-brand {
            font-weight: bold;
            color: #7c3aed !important;
        }

        /* BANNER */
        .banner {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
            url('https://images.unsplash.com/photo-1517336714731-489689fd1ca8');
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner h1 {
            color: #7c3aed;
            text-shadow: 0 0 20px #7c3aed;
        }

        /* CARD */
        .card {
            background: #1e293b;
            border-radius: 15px;
            overflow: hidden;
            transition: 0.3s;
            border: 1px solid transparent;
        }

        .card:hover {
            transform: translateY(-10px);
            border: 1px solid #7c3aed;
            box-shadow: 0 0 20px #7c3aed;
        }

        .price {
            color: #22c55e;
            font-weight: bold;
        }

        /* BUTTON */
        .btn-primary {
            background: #7c3aed;
            border: none;
        }

        .btn-primary:hover {
            background: #6d28d9;
            box-shadow: 0 0 10px #7c3aed;
        }

        /* LINK CARD */
        a.card-link {
            text-decoration: none;
            color: inherit;
        }

        /* FOOTER */
        footer {
            background: #020617;
            border-top: 1px solid #7c3aed;
        }
    </style>
</head>

<body>

<!-- MENU -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">⚡ VINVIN SHOP</a>

        <div>
            <a class="me-4" href="/">Trang chủ</a>
            <a class="me-4" href="/products">Sản phẩm</a>
            <a class="me-4" href="/cart">Giỏ hàng</a>
            <a href="#">Liên hệ</a>
        </div>
    </div>
</nav>

<!-- BANNER -->
<div class="banner">
    <h1>🔥 GAMING LAPTOP - CHIẾN MỌI TỰA GAME 🔥</h1>
</div>

<!-- SẢN PHẨM -->
<div class="container mt-5">

    <h3 class="mb-4 text-center">💻 SẢN PHẨM NỔI BẬT</h3>

    <div class="row g-4">

        @foreach($products as $p)
        <div class="col-md-4">

            <a href="/product/{{ $p->id }}" class="card-link">

                <div class="card h-100">
                    <img src="{{ asset($p->image) }}" class="card-img-top">

                    <div class="card-body text-center">
                        <h5>{{ $p->name }}</h5>
                        <p class="price">{{ number_format($p->price) }}đ</p>

                        <button class="btn btn-primary mt-2">
                            Xem chi tiết
                        </button>
                    </div>
                </div>

            </a>

        </div>
        @endforeach

    </div>

</div>

<!-- FOOTER -->
<footer class="text-center mt-5 p-3">
    © 2026 Gaming Shop - vinvin 🔥
</footer>

</body>
</html>