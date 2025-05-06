document.addEventListener('DOMContentLoaded', function() {
    // Initialiser le carrousel Swiper avec des options avancées
    var swiper = new Swiper(".mySwiper", {
        // Effet de transition
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",

        // Configuration effet coverflow
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },

        // Autoplay
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        speed: 600,
        parallax: true,

        // Responsive breakpoints
        breakpoints: {
            // Mobile
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
                effect: "slide",
            },
            // Tablet
            768: {
                slidesPerView: "auto",
                spaceBetween: 15,
            },
            // Desktop
            1024: {
                slidesPerView: "auto",
                spaceBetween: 20,
            },
        },

        // Si besoin de navigation avec clavier
        keyboard: {
            enabled: true,
        },
    });
});