/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'principal': '#459646',
        'secundario' : '#97532c',
        'terciario': '#e5d620'
      },
      backgroundImage:{

      }
    },
  },
  plugins: [],
}