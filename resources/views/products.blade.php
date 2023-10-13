@foreach($products as $product)
    <div>
        <h3>{{ $product['name'] }}</h3>
        <p>${{ number_format($product['price'] / 100, 2) }}</p>
        <a href="{{ route('add.to.cart', $product['id']) }}">Add to Cart</a>
    </div>
@endforeach
