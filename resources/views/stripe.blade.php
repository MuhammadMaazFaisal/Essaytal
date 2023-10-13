<script src="https://js.stripe.com/v3/"></script>

<h3>Total: ${{ number_format($total / 100, 2) }}</h3>

<form id="payment-form">
    <div id="card-element">
        <!-- Stripe will inject the card element here -->
    </div>
    <button id="submit-button">Pay Now</button>
</form>

<script>
    var stripe = Stripe('{{ env("STRIPE_KEY") }}');
    var elements = stripe.elements();
    var card = elements.create('card');
    card.mount('#card-element');

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        stripe.confirmCardPayment('{{ $intent }}', {
            payment_method: {
                card: card
            }
        }).then(function (result) {
            if (result.error) {
                // Show error
                console.error(result.error.message);
            } else {
                if (result.paymentIntent.status === 'succeeded') {
                    window.location.href = "{{ route('stripe.success') }}";
                }
            }
        });
    });
</script>
