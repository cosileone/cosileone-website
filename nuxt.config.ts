// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: false },
  modules: ['@nuxtjs/tailwindcss', '@nuxt/image', '@vueuse/nuxt', ['@nuxtjs/google-fonts', {
    families: {
      Inter: [400, 500, 600],
      Overpass: {
        wght: [400, 500, 600, 700, 800, 900],
        ital: [400, 900],
      }
    }
  }]],
});
