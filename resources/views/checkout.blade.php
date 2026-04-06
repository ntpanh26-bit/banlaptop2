<h2>📦 Nhập thông tin đặt hàng</h2>

<form method="POST" action="/checkout">
    @csrf

    <input name="name" placeholder="Tên" class="form-control mb-2" required>
    <input name="phone" placeholder="SĐT" class="form-control mb-2" required>
    <input name="address" placeholder="Địa chỉ" class="form-control mb-2" required>

    <button class="btn btn-primary">Xác nhận đặt hàng</button>
</form>