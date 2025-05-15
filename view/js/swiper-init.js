document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: true,
        spaceBetween: 20,

        effect: "coverflow",
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },

        autoplay: {
            delay: 3000,
            disableOnInteraction: true,
        },

        speed: 600,
        keyboard: {
            enabled: true,
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        on: {
            init: function() {
                let slides = document.querySelectorAll('.swiper-slide');
                slides.forEach((slide, index) => {
                    setTimeout(() => {
                        slide.style.opacity = '1';
                        slide.style.transform = 'scale(0.85)';
                    }, index * 100);
                });
            }
        }
    });

    document.querySelectorAll('.swiper-slide').forEach(slide => {
        addNewBadge(slide);
    });
});