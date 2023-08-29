// Configurar Stripe.js con tu clave pública de Stripe
const stripe = Stripe('pk_test_51NUJBsLW97G0onMCGEvK3Sd1BIADMp0jn7EWD3NE4olfQCkrxVxAwW2LKAa7MrKIOIwL3ftR86h5nAyhlx2lhTOp00Z6DruQr5');

// Crear los campos de tarjeta con Stripe Elements
const elements = stripe.elements();
const cardElement = elements.create('card');
cardElement.mount('#card-element');

// Función para enviar el pago
function submitPayment() {
  // const amount = document.querySelector('input[name="amount"]').value;
  var amount = 48.2;
  if (!amount || amount <= 0) {
    alert('Por favor, ingresa un monto válido.');
    return;
  }

  stripe.createToken(cardElement).then(function(result) {
    const displayError = document.getElementById('card-errors');
    if (result.error) {
      displayError.textContent = result.error.message;
    } else {
      // Envía el token seguro y el monto al servidor utilizando AJAX
      $.ajax({
        url: '../CreateCharge.php',
        type: 'POST',
        data: {
          amount: amount,
          stripeToken: result.token.id
        },
        success: function(response) {
          // Manejar la respuesta del servidor (éxito)
          alert('¡Pago exitoso!');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Manejar errores de la solicitud AJAX
          alert('Error: ' + jqXHR.responseText);
        }
      });
    }
  });
}
