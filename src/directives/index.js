const scroll = {
  inserted(el, binding) {
    window.addEventListener('scroll', binding.value);
  },

  unbind(el, binding) {
    window.removeEventListener('scroll', binding.value)
  }
}

const clickOutside = {
  inserted(el, binding) {
    el.clickOutsideEvent = function(event) {
      if (!(el === event.target || el.contains(event.target))) {
        binding.value();
      }
    };
    document.body.addEventListener('click', el.clickOutsideEvent);
  },
  unbind(el) {
    document.body.removeEventListener('click', el.clickOutsideEvent);
  }
};

export { scroll, clickOutside };
