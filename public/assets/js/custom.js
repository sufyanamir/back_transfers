const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect:'coverflow',
    autoplay:true,
    speed:800,
    cardsEffect:{
        depth:400,
        strech:1,
        modifier:1,
        rotate:50,
        scale:1,
        slideshadow:true,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

// card slider
const cardSider = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    effect:'coverflow',
    autoplay:true,
    speed:800,
    cardsEffect:{
        depth:400,
        strech:1,
        modifier:1,
        rotate:50,
        scale:1,
        slideshadow:true,
    },

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
