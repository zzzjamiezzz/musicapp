document.addEventListener('DOMContentLoaded', function () {
    const playlistSwiper = new Swiper('.playlist-swiper', '.recently-played-swiper', '.artists-swiper', {
        loop: true,
        slidesPerView: 6, // Set this to the number of visible slides you want
        spaceBetween: 20,
        grabCursor: true,
        navigation: {
            nextEl: '.next-button',
            prevEl: '.prev-button',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
});


document.querySelectorAll('.swiper-slide').forEach(slide => {
    slide.style.width = 'auto';
});
