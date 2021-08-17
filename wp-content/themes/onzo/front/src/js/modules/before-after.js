const init = (sliderElement) => {
  const handlerElement = sliderElement.querySelector('.before-after__handler');
  const afterElement = sliderElement.querySelector('.before-after__after');

  const beforeOverlay = sliderElement.querySelector('.before-after__before-overlay');
  const afterOverlay = sliderElement.querySelector('.before-after__after-overlay');

  const beforeTitle = sliderElement.querySelector('.before-after__title--before');
  const afterTitle = sliderElement.querySelector('.before-after__title--after');

  const totalWidth = sliderElement.offsetWidth;
  const defaultPosition = totalWidth / 2;

  const state = {
    active: false,
    curPosition: defaultPosition,
    get curProgress() {
      return this.curPosition / totalWidth;
    },
    get afterWidth() {
      return totalWidth - this.curPosition;
    },
    get afterOverlayOpacity() {
      return this.curProgress * 0.8;
    },
    get beforeOverlayOpacity() {
      let value = 1 - this.curProgress;
      return 0.2 + (value * 0.4);
    },

    get afterTitleOpacity() {
      return (1 - this.curProgress) * 2;
    },
    get beforeTitleOpacity() {
      return this.curProgress * 2;
    },
  };

  const setEdge = (x) => {
    let transform = Math.max(0, (Math.min(x, totalWidth)));
    state.curPosition = transform;
    afterElement.style.width = `${state.afterWidth}px`;
    handlerElement.style.left = `${transform}px`;

    beforeOverlay.style.opacity = state.beforeOverlayOpacity;
    afterOverlay.style.opacity = state.afterOverlayOpacity;

    beforeTitle.style.opacity = state.beforeTitleOpacity;
    afterTitle.style.opacity = state.afterTitleOpacity;
  };

  const onHandlerMouseDown = (evt) => {
    state.active = true;
  };

  const onHandlerMouseUp = (evt) => {
    state.active = false;
  };

  const onHandlerMouseMove = (evt) => {
    if (!state.active) return;
    let x = evt.pageX - sliderElement.getBoundingClientRect().left;
    setEdge(x);
  };

  handlerElement.addEventListener('touchstart', onHandlerMouseDown);
  document.body.addEventListener('touchend', onHandlerMouseUp);
  document.body.addEventListener('touchcancel', onHandlerMouseUp);

  handlerElement.addEventListener('mousedown', onHandlerMouseDown);
  document.body.addEventListener('mouseup', onHandlerMouseUp);
  document.body.addEventListener('mouseleave', onHandlerMouseUp);

  document.body.addEventListener('mousemove', onHandlerMouseMove);

  setEdge(defaultPosition);
};

export default () => {
  const sliderElements = document.querySelectorAll('.before-after');

  sliderElements.forEach((sliderElement) => {
    init(sliderElement);
  });
};
