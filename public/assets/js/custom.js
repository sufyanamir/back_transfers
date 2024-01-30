const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // effect:'coverflow',
    autoplay:true,
    delay:200,
    speed:800,
    slidesPerView: 3,
    enabled: true,
    onlyInViewport: true,
    pageUpDown: true,
    // cardsEffect:{
    //     depth:400,
    //     strech:1,
    //     modifier:1,
    //     rotate:50,
    //     scale:1,
    //     slideshadow:true,
    // },

    // If we need pagination

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
});


new DataTable('#dataTable');
