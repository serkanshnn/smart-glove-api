const colors = require('tailwindcss/colors')

module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
      colors: {
          ...colors
      },
    extend: {},
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
