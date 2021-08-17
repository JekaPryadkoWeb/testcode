export default (items, firstClass = 'first-on-line') => {
  const wrapper = items[0].parentNode;

  if (!wrapper) return;

  const init = () => {
    const wrapperWidth = wrapper.clientWidth;
    let totalWidth = 0;

    items.forEach((item) => {
      totalWidth += item.offsetWidth;
      item.classList.remove(firstClass);

      if (totalWidth > wrapperWidth) {
        totalWidth = item.offsetWidth;
        item.classList.add(firstClass);
      }
    });

    items[0].classList.add(firstClass);
  };

  window.onload = init;
  window.onresize = init;
};
