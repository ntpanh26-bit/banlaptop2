<h2>📦 Đơn hàng</h2>

@foreach($orders as $o)
    <p>
        {{ $o->name }} - {{ $o->phone }} - {{ number_format($o->total) }}đ - {{ $o->status }}
    </p>
@endforeach