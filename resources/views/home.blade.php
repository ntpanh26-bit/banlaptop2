<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Web Bán Laptop</title>
    <style>
        /* Reset cơ bản */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f5f7fa; }

        /* Header */
        header { background: linear-gradient(90deg, #ffffff, #01c0ff); color: white; padding: 25px 0; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);}
        header h1 { font-size: 2.2em; letter-spacing: 1px; }

        /* Navigation */
        nav { background-color: #4470ac; padding: 12px 0; text-align: center; }
        nav a { color: #f2fbff; text-decoration: none; margin: 0 15px; font-weight: bold; transition: 0.3s; }
        nav a:hover { color: #4e54c8; }

        /* Main */
        main { padding: 30px; text-align: center; }
        main h2 { color: #111827; margin-bottom: 20px; font-size: 1.8em; }

        /* Card sản phẩm */
        .card-container { display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;max-width: 960px; margin: auto; }
        .card { background-color: white; padding: 20px; width: 220px; border-radius: 12px; box-shadow: 0 6px 12px rgba(0,0,0,0.1); transition: transform 0.3s; }
        .card:hover { transform: translateY(-5px); }
        .card h3 { margin-bottom: 10px; color: #4e54c8; }
        .card p { color: #52f0f3; font-size: 0.95em; }
        .card

        /* Footer */
        footer { background:#4e54c8; color:white; padding:15px 0; text-align:center; font-size:0.9em; }
    </style>
</head>
<body>
    <header>
        <h1>Web Bán Laptop</h1>
    </header>
    <nav>
        <a href="#">Trang Chủ</a>
        <a href="#">Sản Phẩm</a>
        <a href="#">Liên Hệ</a>
        <a href="">Giỏ Hàng</a>
        <a href="">Admin</a>
    </nav>
    <main>
        <h2>Sản Phẩm Nổi Bật</h2>
        <div class="card-container">
            <div class="card">
                <h3>Laptop A</h3>
                <p>Intel i5, RAM 8GB, SSD 256GB</p>
            </div>
            <div class="card">
                <h3>Laptop B</h3>
                <p>Intel i7, RAM 16GB, SSD 512GB</p>
            </div>
            <div class="card">
                <h3>Laptop C</h3>
                <p>AMD Ryzen 5, RAM 8GB, SSD 256GB</p>
            </div>
            <div class="card">
                <h3>Laptop D</h3>
                <p>Intel i9, RAM 32GB, SSD 1TB</p>
            </div>
             <div class="card">
                <h3>Laptop D</h3>
                <p>Intel i9, RAM 32GB, SSD 1TB</p>
            </div>
             <div class="card">
                <h3>Laptop D</h3>
                <p>Intel i9, RAM 32GB, SSD 1TB</p>
            </div>
             <div class="card">
                <h3>Laptop D</h3>
                <p>Intel i9, RAM 32GB, SSD 1TB</p>
            </div>
             <div class="card">
                <h3>Laptop D</h3>
                <p>Intel i9, RAM 32GB, SSD 1TB</p>
            </div>
            
        </div>
    </main>
    <footer>
        &copy; 2026 Web Bán Laptop | Designed by vinvinnnnnerger
    </footer>
</body>
</html>