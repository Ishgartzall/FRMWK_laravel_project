/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')//; y avait ça avant mais jsp si on s'en fout ou pas 
const colors = require('tailwindcss/colors')
module.exports = {
  content: [
    './resources/**/*.{php,js}',
    './resources/**/*.vue'
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },
      colors: {
      },
    },
  },
  plugins: [],
}

