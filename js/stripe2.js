// Configurar Stripe.js con tu clave pública de Stripe
const stripe = Stripe('pk_test_51NUJBsLW97G0onMCGEvK3Sd1BIADMp0jn7EWD3NE4olfQCkrxVxAwW2LKAa7MrKIOIwL3ftR86h5nAyhlx2lhTOp00Z6DruQr5');

// Crear los campos de tarjeta con Stripe Elements
const elements = stripe.elements();
const cardElement = elements.create('card');
cardElement.mount('#card-element');

// Función para enviar el pago

  // función para crear pago
  function paymentStripe(){
    stripe.createToken(cardElement)
      .then(function(result) {
        const token = result.token;
        const displayError = document.getElementById('card-errors');
        if (result.error) {
          displayError.textContent = result.error.message;
        } else {
    console.log(token.id);
    var stripeToken = token.id;
    $.ajax({
      type:"POST",
      url:"CreateCharge.php",
      data:{
        stripeToken: stripeToken,
        ccname:ccname,
        ccnumber:ccnumber,
        ccexpiration:ccexpiration,
        cccvv:cccvv
      },
      dataType: "json",
      success: function(data) {

        var jsonData = JSON.parse(JSON.stringify(data));
          var verificador = jsonData.success;
          if (verificador = 1){
            Swal.fire({
              icon: 'success',
              imageUrl: 'img/natatorial_logo.png',
              imageHeight: 200,
              imageAlt: 'Natatorial',
              title: 'Done!',
              text: 'Your payment its done!',
              confirmButtonColor: '#3085d6',
              footer: 'Natatorial.com'
            }); 
          }
          else if (verificador = 2){
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'No charges for payment!',
                showConfirmButton: false,
                timer: 1500
            })
          }           
        }               
      });

     }

    });
}