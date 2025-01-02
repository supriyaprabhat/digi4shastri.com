const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  autoplay: {
      delay: 4000,
  },
   speed: 400,
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    100: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    580: {
      slidesPerView: 2,
      spaceBetween: 0
    },
   960: {
      slidesPerView: 3,
      spaceBetween: 0
    },
    1260: {
      slidesPerView: 4,
      spaceBetween: 10
    }
  },
  navigation: {
    nextEl: '#slide-prev2',
    prevEl: '#slide-next2',
},
  pagination: {
      el: '.swiper-pagination',
  },
});


const swiper2 = new Swiper('.swiper2', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 4000,
    },
     speed: 400,
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      100: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      580: {
        slidesPerView: 2,
        spaceBetween: 30
      },
     960: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    },
    
    pagination: {
        el: '.swiper-pagination2',
    },
});

const swiper3 = new Swiper('.swiper3', {
  // Optional parameters
  loop: true,
  autoplay: {
      delay: 4000,
  },
   speed: 400,
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    100: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    580: {
      slidesPerView: 1,
      spaceBetween: 20
    },
   960: {
      slidesPerView: 1,
      spaceBetween: 30
    }
  },
  pagination: {
      el: '.swiper-pagination3',
  },
});

const swiper4 = new Swiper('.swiper4', {
  // Optional parameters
  loop: true,
  autoplay: false,
   speed: 400,
  slidesPerView: 1,
  spaceBetween: 10,
  breakpoints: {
    100: {
      slidesPerView: 1,
      spaceBetween: 0
    },

    100: {
      slidesPerView: 1,
      spaceBetween: 0
    },

    300: {
      slidesPerView:2,
      spaceBetween: 0
    },

    400: {
      slidesPerView: 3,
      spaceBetween: 0
    },

    500: {
      slidesPerView: 4,
      spaceBetween: 0
    },

    600: {
      slidesPerView: 5,
      spaceBetween: 0
    },
    880: {
      slidesPerView: 7,
      spaceBetween: 0
    },
   960: {
      slidesPerView:8,
      spaceBetween: 0
    },
    1260: {
      slidesPerView: 10,
      spaceBetween: 10
    }
  },
  navigation: {
    nextEl: '#slide-prev3',
    prevEl: '#slide-next3',
},
 
});