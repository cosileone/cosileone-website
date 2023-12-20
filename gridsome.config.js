// This is where project configuration and plugin options are located.
// Learn more: https://gridsome.org/docs/config

// Changes here require a server restart.
// To restart press CTRL + C in terminal and run `gridsome develop`

module.exports = {
  siteName: "Cosi Leone",
  plugins: [
    {
      use: "gridsome-plugin-tailwindcss",
      options: {
        tailwindConfig: "./tailwind.config.js",
        presetEnvConfig: {},
        shouldImport: false,
        shouldTimeTravel: false
      }
    },
    {
      use: "gridsome-plugin-gtag",
      options: {
        config: {
          id: "UA-59507110-2"
        }
      }
    }
  ]
};
