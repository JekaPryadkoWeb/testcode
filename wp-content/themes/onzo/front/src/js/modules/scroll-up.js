const scrollUp = (offset, duration) => {
  let temp;

  return () => {
      cancelAnimationFrame(temp);
      var start = performance.now();
      var from = window.pageYOffset || document.documentElement.scrollTop;
      requestAnimationFrame(function step(timestamp) {
          var progress = (timestamp - start) / duration;
          1 <= progress && (progress = 1);
          window.scrollTo(0, from + offset * progress | 0);
          1 > progress && (temp = requestAnimationFrame(step))
      });
  }

};

export default () => {
  const scrollUpBtn = document.querySelector('.scroll-up');

  const onScrollUpBtnClick = (evt) => {
    evt.preventDefault();
    window.scrollTo(0,0);
  };

  if (scrollUpBtn) {
    scrollUpBtn.addEventListener('click', onScrollUpBtnClick);
  }
}
