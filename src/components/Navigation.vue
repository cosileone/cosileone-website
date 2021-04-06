<template>
  <header
    class="header flex items-center justify-between font-body container mx-auto px-5 shadow-xl rounded-lg md:max-w-7xl fixed top-10 md:top-12 left-0 right-0 flex"
    v-scroll="onScrollHandler"
  >
    <div class="h-16 w-48 flex items-center text-xl">
      <strong>
        <g-link to="/">portfolio.</g-link>
      </strong>
    </div>
    <nav class="nav hidden md:flex">
      <g-link class="nav__link" to="/">Home</g-link>
      <g-link class="nav__link" to="/about/">About</g-link>
    </nav>
    <div class="">
      <button
        :class="[hasScrolled ? 'opacity-100' : 'opacity-0 cursor-default']"
        class="hidden md:inline-flex transition-opacity items-center px-3 py-2 border shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
        @click="scrollToTop"
      >
        Back to top
      </button>
      <button
        class="hidden md:inline-flex inline-flex ml-4 items-center px-3 py-2 border border-gray-50 text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
      >
        Contact me
      </button>
      <button
        class="sm:inline-flex md:hidden items-center px-2 py-2 border shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
      >
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </button>
    </div>
  </header>
</template>

<script>
import { debounce } from 'lodash-es';
import { scroll } from '~/directives'

export default {
  name: "Navigation",
  directives: {
    scroll,
  },
  data() {
    return {
      hasScrolled: false,
    };
  },
  computed: {
  },
  methods: {
    onScrollHandler: debounce(function () {
      this.hasScrolled = window.scrollY > 0;
    }, 225),
    scrollToTop() {
      window.scroll({
        top: 0,
        behavior: 'smooth',
      })
    }
  },
}
</script>

<style scoped>
.header {
  background-color: white;
  /*box-shadow: rgba(0, 0, 0, 0.07) 0px 24px 32px -8px, rgba(0, 0, 0, 0.03) 0px 4px 32px 0px*/
  width: 80%;
}

.nav {
}

.nav__link {
  @apply text-sm px-4 py-2 font-medium rounded hover:bg-gray-100 transition-colors;
  margin-left: 20px;
}

.hamburger-button {

}
</style>
