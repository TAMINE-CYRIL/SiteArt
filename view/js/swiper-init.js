document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,

        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },

        speed: 600,
        keyboard: {
            enabled: true,
        },
    });
});