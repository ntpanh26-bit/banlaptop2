<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8fafc;
        }

        .box {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .title {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .price {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="row">

        <!-- FORM -->
        <div class="col-md-6">
            <div class="box">

                <h4 class="title">📦 Thông tin nhận hàng</h4>

                <form method="POST" action="/checkout">
                    @csrf

                    <input name="name" placeholder="Họ tên" class="form-control mb-3" required>

                    <input name="phone" placeholder="Số điện thoại" class="form-control mb-3" required>

                    <input name="address" placeholder="Địa chỉ" class="form-control mb-3" required>

                    <button class="btn btn-primary w-100">
                        Xác nhận đặt hàng
                    </button>
                </form>

            </div>
        </div>

        <!-- GIỎ HÀNG -->
        <div class="col-md-6">
            <div class="box">

                <h4 class="title">🛒 Đơn hàng của bạn</h4>

                @php $total = 0; @endphp

                @foreach(session('cart', []) as $item)
                    <p>
                        {{ $item['name'] }} x {{ $item['quantity'] }}
                        <span class="price float-end">
                            {{ number_format($item['price'] * $item['quantity']) }}đ
                        </span>
                    </p>

                    @php $total += $item['price'] * $item['quantity']; @endphp
                @endforeach

                <hr>

                <h5>
                    Tổng:
                    <span class="price float-end">
                        {{ number_format($total) }}đ
                    </span>
                </h5>

            </div>
        </div>

    </div>

</div>

</body>
</html>