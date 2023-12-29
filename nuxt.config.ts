// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: ['@nuxtjs/tailwindcss', '@nuxt/image', '@vueuse/nuxt', ['@nuxtjs/google-fonts', {
    families: {
      Inter: true, Overpass: {
        wght: [100, 200, 300, 400, 500, 600, 700, 800, 900],
        ital: [400, 900],
      }
    }
  }]],
});
