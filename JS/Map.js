/* Start Map */
function openGPS(lat, lng) {
    window.open(`https://www.google.com/maps?q=${lat},${lng}`, '_blank');
    }

    function highlightLocation(title) {
    const locations = document.querySelectorAll('.map-location');
    locations.forEach(loc => {
        if (loc.title === title) {
        loc.classList.add('flash');
        setTimeout(() => {
            loc.classList.remove('flash');
        }, 1500);
        }
    });
    }
    /* End Map */