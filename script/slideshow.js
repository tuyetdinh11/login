// Tạo một Swiper
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 10, // Khoảng cách giữa các slide
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// Gỡ bỏ sự kiện click mặc định của nút điều hướng
swiper.off('click', '.swiper-button-next');
swiper.off('click', '.swiper-button-prev');
