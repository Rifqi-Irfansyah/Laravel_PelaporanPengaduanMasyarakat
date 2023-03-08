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
        birutua: {
          DEFAULT: '#758ABA',
        },
        birumuda: {
          DEFAULT: '#DCE5F2',
        },
        kuning: {
          DEFAULT: '#F8C300',
        },
        hijau: {
          DEFAULT: '#32CD32',
        },
        merah: {
          DEFAULT: '#B81313',
        }
      },
    },
  },
  variants: {},
  plugins: [],
}

// biru tua:445279
// biru:758ABA
// biru muda:DCE5F2