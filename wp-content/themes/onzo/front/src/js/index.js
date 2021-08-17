import {MEDIA_DESKTOP, MEDIA_MOBILE, getScrollBarWidth} from './modules/utils';

import initHomeIntroSlider from './modules/home-intro-slider';
import initHomeIntroSpot from './modules/home-intro-spot';
import initBlogFeatSlider from './modules/blog-feat-slider';
import initBeforeAfter from './modules/before-after';
import initWordsSeparators from './modules/words-separators';
import initScrollUp from './modules/scroll-up';
import initHeader from './modules/header';
import initMobMenu from './modules/mob-menu';
import initPopups from './modules/popup';
import initForms from './modules/forms';

window.scrollbarWidth = getScrollBarWidth();
document.documentElement.style.setProperty('--scrollbar-width', `${window.scrollbarWidth}px`);

function isTouchDevice() {
  return !!('ontouchstart' in window || navigator.maxTouchPoints);
};

if (isTouchDevice()) {
  document.documentElement.classList.add('touch');
  document.documentElement.classList.remove('no-touch');
} else {
  document.documentElement.classList.add('no-touch');
  document.documentElement.classList.remove('touch');
}

window.isMobile = () => {
  return window.matchMedia(MEDIA_MOBILE).matches;
};

window.isDesktop = () => {
  return window.matchMedia(MEDIA_DESKTOP).matches;
};

initHomeIntroSlider();
initHomeIntroSpot();
initBlogFeatSlider();
initBeforeAfter();
initScrollUp();
initHeader();
initMobMenu();
initPopups();

const subcatsElements = document.querySelectorAll('.subcats__item');

if (subcatsElements.length) {
  initWordsSeparators(subcatsElements, 'subcats__item--first');
}

const feedbackFormElements = [...document.querySelectorAll('.contacts-form__form')];

for (const formElement of feedbackFormElements) {
  initForms(formElement);
}
