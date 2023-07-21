// Configurar Stripe.js con tu clave pública de Stripe
const stripe = Stripe('TU_CLAVE_PUBLICA');

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
        url: 'charge.php',
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
