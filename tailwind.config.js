/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors:{
        'principal': '#459646',
        'secundario' : '#97532c',
        'terciario': '#e5d620'
      },
      fontFamily:{
        'sans' : ['Ubuntu'],
        'lemonada' : ['Lemonada']
      },
      boxShadow:{
        'inputBox': '0 4px 9px -4px #3b71ca',
        'inputBoxHover': '0 8px 9px -4px rgba(59,113,202,0.3),0 4px 18px 0 rgba(59,113,202,0.2)',

      }
    },
  },
  plugins: [require("tw-elements/dist/plugin.cjs")],
  darkMode: "class"
}
