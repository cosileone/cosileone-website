import typography from '@tailwindcss/typography';
import forms from '@tailwindcss/forms';
import aspectRatio from '@tailwindcss/aspect-ratio';
import type { Config } from 'tailwindcss';


const config = {
  content: ['./src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      fontFamily: {
        display: ['Overpass', 'system-ui', 'sans-serif'],
        body: ['Inter', 'system-ui', 'sans-serif']
      },
      borderRadius: {
        iphone: '28pt'
      },
      transitionProperty: {
        visibility: 'visibility'
      }
    }
  },
  plugins: [typography, forms, aspectRatio]
} satisfies Config;

export default config;
