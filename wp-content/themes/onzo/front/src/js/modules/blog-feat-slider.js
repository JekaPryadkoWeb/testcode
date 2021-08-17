import { Swiper } from 'swiper';

export default () => {
  const sliderElement = document.querySelector('.blog-feat__slider');

  if (!sliderElement) return null;

  const slider = new Swiper(sliderElement, {
    slidesPerView: 1,
    spaceBetween: 15,
    // loop: true,
    init: false,
  });

  let sliderInited = false;

  const initSlider = () => {
    if (!sliderInited) {
      slider.init();
      sliderInited = true;
    }

    slider.update();
  };

  const destroySlider = () => {
    if (sliderInited) {
      slider.destroy(false, true);
      sliderInited = false;
    }
  };

  const checkSlider = () => {
    if (window.isMobile()) {
      initSlider();
    } else {
      destroySlider();
    }
  };

  window.addEventListener('resize', () => {
    checkSlider();
  });

  checkSlider();

  return slider;
};
