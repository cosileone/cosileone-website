import plugin_gridsome_plugin_tailwindcss_5 from "/Users/cosi/dev/personal_projects/cosileone-website/node_modules/gridsome-plugin-tailwindcss/gridsome.client.js"
import plugin_gridsome_plugin_gtag_6 from "/Users/cosi/dev/personal_projects/cosileone-website/node_modules/gridsome-plugin-gtag/gridsome.client.js"

export default [
  {
    run: plugin_gridsome_plugin_tailwindcss_5,
    options: {"tailwindConfig":"./tailwind.config.js","presetEnvConfig":{"stage":0,"autoprefixer":false},"shouldImport":false,"shouldTimeTravel":false}
  },
  {
    run: plugin_gridsome_plugin_gtag_6,
    options: {"config":{"id":"UA-59507110-2"}}
  }
]
