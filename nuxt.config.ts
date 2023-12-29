// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  app: {
    head: {
      title: 'Cosi Leone',
      meta: [
        {
          name: 'description',
          content: 'Cosi Leone is a freelance web developer based in London, New York City, and Florence Italy (Firenze). He provides the best-in-class web development services for e-commerce websites, web and mobile applications, content creators, influencers, and startups of any size.'
        },
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' }
      ],
    }
  },
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
