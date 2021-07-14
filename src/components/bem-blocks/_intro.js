let intro_slider = new Swiper(".intro-slider", {
  speed: 700,
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  noSwiping: false,
  pagination: {
    el: ".intro-slider__dots",
    clickable: "true"
  },
  slidesPerView: 1,
  breakpoints: {
    320: {
      spaceBetween: 10
    },
    1280: {
      spaceBetween: 10
    }
  }
});