// Prijzen van de producten
const prices = {
    product1: 2.5,
    product2: 1.8,
    product3: 1.2,
    product4: 2.0
};

// HTML-elementen ophalen
const inputs = document.querySelectorAll('input[type="number"]');
const summaryContent = document.getElementById('summary-content');
const totalPriceElement = document.getElementById('total-price');
const resetButton = document.getElementById('reset-btn');

// Functie om bestelling bij te werken
function updateOrder() {
    summaryContent.innerHTML = ''; // Reset het overzicht
    let total = 0;

    // Door alle inputvelden loopen
    inputs.forEach(input => {
        const quantity = parseInt(input.value);
        if (quantity > 0) { // Alleen toevoegen als het aantal > 0 is
            const productId = input.id;
            const price = prices[productId];
            const cost = (price * quantity).toFixed(2);

            // Productregel maken
            const line = document.createElement('div');
            line.textContent = `${input.previousElementSibling.textContent} ${quantity} x €${price.toFixed(2)} = €${cost}`;
            summaryContent.appendChild(line);

            // Totale prijs optellen
            total += parseFloat(cost);
        }
    });

    // Totale prijs weergeven
    totalPriceElement.textContent = total > 0 ? `Totale prijs: €${total.toFixed(2)}` : '';
}

// Functie om alles te resetten
function resetForm() {
    inputs.forEach(input => input.value = 0);
    summaryContent.innerHTML = '';
    totalPriceElement.textContent = '';
}

// Event listeners
inputs.forEach(input => input.addEventListener('input', updateOrder));
resetButton.addEventListener('click', resetForm);
