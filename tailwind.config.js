/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            palanquin: ['Palanquin', 'sans-serif'],
            montserrat: ['Montserrat', 'sans-serif'],
          },
          colors:{
            "pink":"#FDEEEC",
            "orange":"#E95440",
            "gry":"#626262"



          },
          screens: {
            // Define custom screen sizes
            'xs': '360px',
            'xxs': '375px',
            'sm': '640px', // Adjust as needed
            'md': '770px', // Adjust as needed
            'lg': '1024px', // Adjust as needed
            'xl': '1280px', // Adjust as needed
            '2xl': '1440px', // Adjust as needed
            // Add more custom screen sizes if necessary
          },
    },
  },
  plugins: [
      require('flowbite/plugin')
  ],
}
