module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        display: ['Overpass', 'system-ui', 'sans-serif'],
        body: ['Inter', 'system-ui', 'sans-serif'],
      },
      borderRadius: {
        'iphone': '28pt',
      },
      transitionProperty: {
        visibility: ['visibility']
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
