export default () => {
  const headerElement = document.querySelector('.header');
  const mobMenuElement = document.querySelector('.mob-menu');
  const menuBtn = document.querySelector('.header__menu-btn');
  const subMenuItemSpans = mobMenuElement.querySelectorAll('.menu-item-has-children > span');
  const backElements = mobMenuElement.querySelectorAll('.mob-menu__back');
  const navElement = mobMenuElement.querySelector('.mob-menu__nav');

  if (!mobMenuElement || !menuBtn || !headerElement || !navElement) return;

  const onMenuTransitionend = () => {
    mobMenuElement.style.display = 'none';
    mobMenuElement.removeEventListener('transitionend', onMenuTransitionend);
  };

  const onMenuBtnClick = () => {
    menuBtn.classList.toggle('header__menu-btn--opened');
    headerElement.classList.toggle('header--menu-opened');

    if (!mobMenuElement.classList.contains('mob-menu--opened')) {
      mobMenuElement.style.display = 'block';
      setTimeout(() => {
        mobMenuElement.classList.add('mob-menu--opened');
      }, 50);
      document.body.classList.add('no-scroll');
    } else {
      mobMenuElement.classList.remove('mob-menu--opened');
      mobMenuElement.addEventListener('transitionend', onMenuTransitionend);
      document.body.classList.remove('no-scroll');
    }
  };

  menuBtn.addEventListener('click', onMenuBtnClick);

  const initialHeight = navElement.offsetHeight;

  navElement.style.height = `${initialHeight}px`;

  subMenuItemSpans.forEach((item) => {
    const onSubMenuItemSpanClick = (evt) => {
      evt.preventDefault();
      const parentElement = item.parentNode;
      const subMenuElement = parentElement.querySelector('.sub-menu');
      navElement.classList.add('mob-menu__nav--opened');
      navElement.style.height = `${subMenuElement.offsetHeight}px`;

      parentElement.classList.add('opened');
    };

    item.addEventListener('click', onSubMenuItemSpanClick);
  });

  backElements.forEach((item) => {
    const onBackElementClick = (evt) => {
      evt.preventDefault();
      const parentElement = item.closest('li');
      navElement.style.height = `${initialHeight}px`;
      parentElement.classList.remove('opened');
      navElement.classList.remove('mob-menu__nav--opened');
    };

    item.addEventListener('click', onBackElementClick);
  });
};
