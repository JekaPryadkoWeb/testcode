export default () => {
  const headerElement = document.querySelector('.header');

  if (!headerElement) return;

  const onWindowScroll = () => {
    if (window.scrollY > 0) {
      headerElement.classList.add('header--scroll');
    } else {
      headerElement.classList.remove('header--scroll');
    }
  };

  window.addEventListener('scroll', onWindowScroll);
};
