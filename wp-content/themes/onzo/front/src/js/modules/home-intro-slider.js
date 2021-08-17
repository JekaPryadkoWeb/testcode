import {
  Swiper,
  EffectFade,
  Pagination
} from 'swiper';

Swiper.use([EffectFade, Pagination]);

export default () => {
  const sliderElement = document.querySelector('.home-intro__slider');
  const navLinks = document.querySelectorAll('.home-intro__nav-link');
  const imageElements = document.querySelectorAll('.home-intro__shape .item__img');

  if (!sliderElement) return null;

  const slider = new Swiper(sliderElement, {
    slidesPerView: 1,
    spaceBetween: 0,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    simulateTouch: false,
    allowTouchMove: false
  });

  const checkNavLink = (index) => {

    for (const link of navLinks) {
      link.classList.remove('home-intro__nav-link--active');
    }
    navLinks[index].classList.add('home-intro__nav-link--active');
  };

  const checkImage = (index) => {
    imageElements.forEach((item, i) => {
      if (i == index) {
        item.classList.add('item__img--active');
      } else {
        item.classList.remove('item__img--active');
      }
    });
  };

  navLinks.forEach((navLink, index) => {
    navLink.addEventListener('click', (evt) => {
      evt.preventDefault();
      if (slider.activeIndex === index) return;
      slider.slideTo(index);
      checkNavLink(index);
      checkImage(index);
    });
  });

  checkNavLink(slider.activeIndex);
  checkImage(slider.activeIndex);

  return slider;
};
