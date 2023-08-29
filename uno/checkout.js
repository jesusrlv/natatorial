var stripe = Stripe('pk_test_51NUJBsLW97G0onMCGEvK3Sd1BIADMp0jn7EWD3NE4olfQCkrxVxAwW2LKAa7MrKIOIwL3ftR86h5nAyhlx2lhTOp00Z6DruQr5');
var elements = stripe.elements();
var cardElement = elements.create('card');
cardElement.mount('#card-element');

cardElement.on('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    var button = form.querySelector('button');
    button.disabled = true;
    button.textContent = 'Procesando...';

    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
            button.disabled = false;
            button.textContent = 'Realizar Pago';
        } else {
            // Envía el token de pago al servidor para procesar el pago.
            fetch('/procesar_pagp.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ token: result.token.id }),
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                if (data.success) {
                    // El pago se procesó con éxito.
                    alert('Pago exitoso. ID de la carga: ' + data.chargeId);
                } else {
                    // Maneja errores del servidor.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = 'Hubo un error al procesar el pago.';
                    button.disabled = false;
                    button.textContent = 'Realizar Pago';
                }
            });
        }
    });
});
