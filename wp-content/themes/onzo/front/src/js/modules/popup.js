const popups = document.querySelectorAll('.popup');

const openPopup = (popupElement) => {
  popupElement.classList.add('popup--opened');

  document.body.style.paddingRight = `${window.scrollbarWidth}px`;
  document.body.classList.add('no-scroll');

  const onEscKeydown = (evt) => {
    if (evt.keyCode === 27) {
      closePopup(popupElement);
      window.removeEventListener('keydown', onEscKeydown);
    }
  };

  window.addEventListener('keydown', onEscKeydown);
};

const closePopup = (popupElement) => {
  popupElement.classList.remove('popup--opened');

  const onPopupTransitionend = (evt) => {
    evt.stopPropagation();

    if (evt.target === popupElement) {
      popupElement.removeEventListener('keydown', onPopupTransitionend);
      document.body.style.paddingRight = `0px`;
      document.body.classList.remove('no-scroll');
    }
  };

  popupElement.addEventListener('transitionend', onPopupTransitionend, {once: true});
};

const initPopup = (name) => {
  const openBtns = document.querySelectorAll(`.js-open-popup[data-popup="${name}"]`);
  const popupElement = document.querySelector(`.popup[data-popup="${name}"]`);
  const closeBtn = popupElement.querySelector('.popup__close');
  const overlay = popupElement.querySelector('.popup__overlay');

  if (!popupElement) return;

  const onOpenBtnClick = (evt) => {
    evt.preventDefault();
    openPopup(popupElement);
  };

  const onCloseBtnClick = (evt) => {
    evt.preventDefault();
    closePopup(popupElement);
  };

  const onOverlayClick = (evt) => {
    evt.preventDefault();
    closePopup(popupElement);
  };

  openBtns.forEach((item) => {
    item.addEventListener('click', onOpenBtnClick);
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', onCloseBtnClick);
  }

  if (overlay) {
    overlay.addEventListener('click', onOverlayClick);
  }
};

export default () => {
  popups.forEach((item) => {
    const name = item.dataset.popup;

    if (name) {
      initPopup(name);
    }
  });
};
