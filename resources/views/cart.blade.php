@foreach($cart as $item)
    <div>
        <h3>{{ $item['name'] }}</h3>
        <p>${{ number_format($item['price'] / 100, 2) }}</p>
    </div>
@endforeach
<h4>Total: ${{ number_format($total / 100, 2) }}</h4>
<a href="{{ route('stripe.payment') }}">Proceed to Payment</a>
