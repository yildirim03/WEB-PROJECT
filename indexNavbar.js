    document.addEventListener("DOMContentLoaded", function () {
        // Navbar toggler butonunu seçin
        var navbarToggler = document.querySelector(".navbar-toggler");

        // Navbar collapse içeriğini seçin
        var navbarCollapse = document.querySelector(".navbar-collapse");

        // Navbar toggler butonuna click event'i ekleyin
        navbarToggler.addEventListener("click", function () {
            // Navbar collapse içeriğini açıp kapatın
            navbarCollapse.classList.toggle("show");
        });
    });
