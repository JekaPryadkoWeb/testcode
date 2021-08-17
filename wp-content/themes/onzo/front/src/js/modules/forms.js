const initForm = (formElement) => {
  const path = formElement.action;
  // const inputElement = formElement.querySelector('input');
  const fields = formElement.querySelectorAll('input,textarea');
  const method = formElement.getAttribute('method') || 'POST';
  const btnElement = formElement.querySelector('button');
  const textSuccess = btnElement.dataset.textSuccess;
  const textError = btnElement.dataset.textError;

  fields.forEach((field) => {
    field.addEventListener('change', () => {
      btnElement.disabled = false;
    });
  });

  const lockForm = () => {
    fields.forEach((field) => {
      field.disabled = true;
    });
    btnElement.disabled = true;
  };

  const unlockForm = () => {
    fields.forEach((field) => {
      field.disabled = false;
    });
    btnElement.disabled = false;
  };

  const onSuccess = () => {
    btnElement.textContent = textSuccess;
    btnElement.classList.remove('contacts-form__btn--error');
    btnElement.classList.add('contacts-form__btn--success');
  };

  const onError = () => {
    unlockForm();
    btnElement.textContent = textError;
    btnElement.classList.add('contacts-form__btn--error');
    btnElement.classList.remove('contacts-form__btn--success');
  };

  const sendData = () => {
    const XHR = new XMLHttpRequest();
    const formData = new FormData(formElement);

    fields.forEach((field) => {
      formData.append(field.name, field.value);
    });

    XHR.onreadystatechange = () => {
      if (XHR.readyState === 4) {
        const response = JSON.parse(XHR.response);

        if (response.success && response.success === true) {
          onSuccess()
        } else {
          onError();
        }
      }
    };

    // XHR.addEventListener('load', onSuccess);

    XHR.addEventListener('error', onError);

    XHR.open(method, path);

    XHR.send(formData);
  };

  const onFormSubmit = (evt) => {
    evt.preventDefault();
    lockForm();
    sendData();
  };

  formElement.addEventListener('submit', onFormSubmit);
};

export default initForm;
