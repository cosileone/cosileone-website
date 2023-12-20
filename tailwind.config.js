/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        display: ["Overpass", "system-ui", "sans-serif"],
        body: ["Inter", "system-ui", "sans-serif"]
      },
      borderRadius: {
        iphone: "28pt"
      },
      transitionProperty: {
        visibility: ["visibility"]
      }
    }
  },
  plugins: []
};
