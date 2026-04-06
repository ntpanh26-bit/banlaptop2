<h2>🛒 Giỏ hàng</h2>

@php $total = 0; @endphp

@foreach(session('cart', []) as $item)
    <p>
        {{ $item['name'] }} - {{ $item['quantity'] }} x {{ number_format($item['price']) }}đ
    </p>

    @php $total += $item['price'] * $item['quantity']; @endphp
@endforeach

<h3>Tổng: {{ number_format($total) }}đ</h3>
<a href="/checkout" class="btn btn-success">Đặt hàng</a>