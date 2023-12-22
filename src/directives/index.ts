const scroll = {
  inserted(el: HTMLElement, binding: { value: (this: Window, ev: Event) => any; }) {
    window.addEventListener('scroll', binding.value);
  },

  unbind(el: HTMLElement, binding: { value: (this: Window, ev: Event) => any; }) {
    window.removeEventListener('scroll', binding.value)
  }
}

export { scroll };
