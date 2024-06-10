<template>
  <header
    :class="[hasScrolled ? 'bg-slate-300/30' : 'bg-slate-100/10']"
    class="header backdrop-blur-md group/header flex items-center justify-between transition-all duration-300 font-body container mx-auto px-5 shadow-xl rounded-lg md:max-w-7xl fixed top-10 md:top-12 left-0 right-0 z-10"
  >
    <div class="h-16 w-48 flex items-center text-xl">
      <h1>
        <NuxtLink to="/" :class="[hasScrolled ? 'text-black' : 'text-gray-200']"
                  class="font-display font-semibold transition-colors">Cosi Leone
        </NuxtLink>
      </h1>
    </div>
    <nav class="hidden md:flex">
      <!--      <g-link-->
      <!--        class="text-sm px-4 py-2 font-medium rounded ml-5 hover:bg-gray-100 transition-all opacity-0 group-hover/header:opacity-100 group-hover/header:duration-300"-->
      <!--        to="/"-->
      <!--        >Home</g-link-->
      <!--      >-->
      <!--      <NuxtLink class="nav__link" :class="[hasScrolled ? 'text-gray-900' : 'text-gray-200']" to="/about">About</NuxtLink>-->
    </nav>
    <div>
      <button
        :class="[hasScrolled ? 'opacity-100' : 'opacity-0 cursor-default']"
        class="hidden md:inline-flex transition-[color,background-color,border-color,text-decoration-color,fill,stroke,opacity] items-center px-3 py-2 border border-slate-100 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
        @click="scrollToTop"
      >
        Back to top
      </button>
      <a
        href="https://cal.com/cosileone"
        class="hidden md:inline-flex transition-colors ml-4 items-center px-3 py-2 text-sm leading-4 font-medium rounded-md shadow-sm text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
      >
        Contact Me
      </a>
      <button
        @click.stop="isMenuOpen = !isMenuOpen"
        class="sm:inline-flex md:hidden items-center px-2 py-2 border border-gray-500 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-900 bg-white/20 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-700 focus:ring-gray-500"
      >
        <svg
          v-if="!isMenuOpen"
          class="h-4 w-4"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16"
          />
        </svg>
        <svg
          v-else
          class="h-4 w-4"
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 18L18 6M6 6l12 12"
          />
        </svg>
      </button>
    </div>
    <transition
      enter-active-class="transition ease-out duration-100"
      enter-class="transform opacity-0 scale-95"
      enter-to-class="transform opacity-100 scale-100"
      leave-active-class="transition ease-in duration-75"
      leave-class="transform opacity-100 scale-100"
      leave-to-class="transform opacity-0 scale-95"
    >
      <div
        v-show="isMenuOpen"
        v-on-click-outside.bubble="onClickOutsideHandler"
        class="block md:hidden origin-top-right absolute top-16 right-0 mt-2 w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="options-menu"
      >
        <div class="py-1 text-center" role="none">
          <!--          <NuxtLink-->
          <!--            to="/"-->
          <!--            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"-->
          <!--            role="menuitem"-->
          <!--            >Home-->
          <!--          </NuxtLink>-->
          <a href="https://cal.com/cosileone"
             class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"
             role="menuitem"
          >
            Contact Me
          </a>
          <!--          <g-link-->
          <!--            to="/about/"-->
          <!--            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900"-->
          <!--            role="menuitem"-->
          <!--            >About-->
          <!--          </g-link>-->
        </div>
      </div>
    </transition>
  </header>
</template>

<script setup lang="ts">
import throttle from 'lodash-es/throttle';
import { vOnClickOutside } from '@vueuse/components';


const isMenuOpen = ref(false);
const hasScrolled = ref(false);

const onScrollHandler = throttle(function () {
  hasScrolled.value = window.scrollY > 0;
}, 115);

const router = useRouter();
const scrollToTop = () => {
  window.scroll({
    top: 0,
    behavior: 'smooth'
  });
  router.replace({ hash: '' });
}

const onClickOutsideHandler = () => isMenuOpen.value = false;

onMounted(() => {
  window.addEventListener('scroll', onScrollHandler);
});
onUnmounted(() => {
  window.removeEventListener('scroll', onScrollHandler);
});
</script>

<style scoped>
.header {
    /*box-shadow: rgba(0, 0, 0, 0.07) 0px 24px 32px -8px, rgba(0, 0, 0, 0.03) 0px 4px 32px 0px*/
    width: 80%;
}

.nav__link {
    @apply text-sm px-4 py-2 font-medium rounded hover:bg-gray-100 hover:text-gray-700 transition-colors ml-4;
}

.hamburger-button {
}
</style>
