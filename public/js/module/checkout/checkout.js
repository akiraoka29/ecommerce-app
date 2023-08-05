
const Checkout = {}

Checkout.init = () => {
    Checkout.event.processCheckout()
}

Checkout.api = {
    checkout: () => {
        $.ajax({
            type: 'POST',
            url: checkoutRoute,
            data: $('#checkoutForm').serialize(),
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                alert('Berhasil membuat pesanan!');
                window.location.href = '/'
            },
            error: function(response) {
                alert('Terjadi kesalahan saat mengirim data.');
            }
        });
    }
}

Checkout.event = {
    processCheckout: () => {
        $('#checkoutBtn').on('click', function() {
            // Call Checkout API
            Checkout.api.checkout()
        })
    }
}

Checkout.init()