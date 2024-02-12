const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // effect:'coverflow',
    autoplay:true,
    delay:200,
    speed:500,
    slidesPerView: 1,
    enabled: true,
    onlyInViewport: true,
    pageUpDown: true,
    // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    360: {
      slidesPerView: 1,
      spaceBetween: 50
    },
    342: {
      slidesPerView: 1,
      spaceBetween: 50
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 250
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 1,
      spaceBetween: 40
    },
    690: {
      slidesPerView: 2,
      spaceBetween: 40
    },
    736: {
      slidesPerView: 2,
      spaceBetween: 40
    },
    768: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      830: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      834: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 300
      }
  },
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
        nextEl: '.swiper-button',
        prevEl: '.swiper-pre',
    },

    // And if we need scrollbar
});


new DataTable('#dataTable');
