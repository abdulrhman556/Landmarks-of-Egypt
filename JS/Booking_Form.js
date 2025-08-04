    // Strat Booking Form.

    // JavaScript to Update Price 
    document.getElementById('people_count').addEventListener('input', function () {
        const basePrice = 2000;
        const additionalPersonPrice = 100;
        const peopleCount = parseInt(this.value) || 1;
        const totalPrice = basePrice + (additionalPersonPrice * (peopleCount - 1));
        
        document.getElementById('price').value = totalPrice;
        
        // Show alert if more than one person
        if (peopleCount > 1) {
            document.getElementById('priceAlert').style.display = 'block';
        } else {
            document.getElementById('priceAlert').style.display = 'none';
        }
    });
    window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    if (params.has('trip_name')) {
        document.getElementById('trip_name').value = params.get('trip_name');
        document.getElementById('days').value = params.get('days');
        document.getElementById('price').value = params.get('price');
        document.getElementById('transport').value = params.get('transport');
        document.getElementById('guide').value = params.get('guide');
        document.getElementById('hotel').value = params.get('hotel');
    }
};

   // End Booking Form.