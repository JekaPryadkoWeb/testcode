export const MEDIA_MOBILE = '(max-width: 639px)';
export const MEDIA_DESKTOP = '(min-width: 1200px)';

export const getScrollBarWidth = () => {
  if (document.documentElement.scrollHeight === document.documentElement.offsetHeight) {
    return 0;
  } else {
    let div = document.createElement('div');
    div.style.overflowY = 'scroll';
    div.style.width = '50px';
    div.style.height = '50px';

    div.style.visibility = 'hidden';

    document.body.appendChild(div);
    let scrollWidth = div.offsetWidth - div.clientWidth;
    document.body.removeChild(div);

    return scrollWidth;
  }
};
