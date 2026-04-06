<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-success {
            border-radius: 10px;
            font-weight: bold;
        }

        h2 {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
    
    <div class="card p-4" style="width: 500px;">
        
        <h2 class="text-center mb-4">➕ Thêm sản phẩm</h2>

        <form method="POST" action="/admin/products">
            @csrf

            <div class="mb-3">
                <label class="form-label">Tên sản phẩm</label>
                <input name="name" class="form-control" placeholder="Nhập tên laptop...">
            </div>

            <div class="mb-3">
                <label class="form-label">Giá</label>
                <input name="price" class="form-control" placeholder="VD: 15000000">
            </div>

            <div class="mb-3">
                <label class="form-label">Ảnh</label>
                <input name="image" class="form-control" placeholder="img/lap1.jpg">
            </div>

            <button class="btn btn-success w-100">🚀 Thêm sản phẩm</button>
        </form>

    </div>

</div>

</body>
</html>