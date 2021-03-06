let womenHero = new Swiper(".women-hero__slider", {
  speed: 700,
  spaceBetween: 76,
  loop: true,
  noSwiping: false,
  pagination: {
    el: ".women-hero__dots",
    clickable: "true"
  },
  navigation: {
    prevEl: ".women-hero__arrows .prev",
    nextEl: ".women-hero__arrows .next"
  },
  slidesPerView: 1,
  breakpoints: {
    320: {
      spaceBetween: 10
    },
    1280: {
      spaceBetween: 76
    }
  }
});