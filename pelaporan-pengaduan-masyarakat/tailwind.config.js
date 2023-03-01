const { DEFAULT_ECDH_CURVE } = require('tls')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        light: {
          DEFAULT: '#DCE5F2',
        },
        middle: {
          DEFAULT: '#758ABA',
        },
        dark: {
          DEFAULT: '#445279',
        },
      },
    },
  },
  variants: {},
  plugins: [],
}
