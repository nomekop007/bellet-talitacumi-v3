

$(document).ready(function () {
 
    /* MENU EFECTO */

    $(window).scroll(function () {
        if ($("#menu").offset().top > 120) {
            $("#menu").addClass("bg-inverse");
            $(".fa-bars").addClass("change-i");
        } else {
            $("#menu").removeClass("bg-inverse");
            $(".fa-bars").removeClass("change-i");
        }
    });

    /* ----------- */

    /* MAPA JS  */

    var map = L.map('map').setView([-35.430869, -71.662904], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-35.430869, -71.662904]).addTo(map)
        .bindPopup('Ballet Cristiano Talita Cumi')
        .openPopup();

    /* ------- */

})
