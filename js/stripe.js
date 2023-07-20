// Dar formato a card_expiry como MM/AA
const cardExpiry = document.getElementById('ccexpiration');
cardExpiry.addEventListener('input', (e) => {
  let value = e.target.value.replace(/\D/g, '').substring(0, 4);
  value = value.replace(/(\d{2})(\d)/, '$1/$2');
  e.target.value = value;
});

// Detectar automáticamente el tipo de tarjeta basado en card_number
const cardNumber = document.getElementById('ccnumber');
cardNumber.addEventListener('#ccnumber', (e) => {
  const cardType = Card.cardType(e.target.value);
  const cardIcon = document.createElement('i');
  cardIcon.className = `fab fa-cc-${cardType}`;
  document.querySelector('.card-wrapper').innerHTML = '';
  document.querySelector('.card-wrapper').appendChild(cardIcon);
  Card.formatCardNumber(e.target);
});

const cardNumberInput = document.getElementById('ccnumber');

  cardNumberInput.addEventListener('input', (e) => {
    const { value } = e.target;
    e.target.value = formatCardNumber(value);
  });

  function formatCardNumber(cardNumber) {
    return cardNumber.replace(/\D/g, '')
      .replace(/(\d{4})(\d{4})(\d{4})(\d{4})/, '$1 $2 $3 $4')
      .trim()
      .substr(0, 19);
  }

  const cardCvcInput = document.getElementById('cccvv');

  cardCvcInput.addEventListener('input', (e) => {
    const { value } = e.target;
    e.target.value = value.replace(/\D/g, '').substr(0, 3);
  });