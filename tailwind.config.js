/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./public/assets/fonts/Arial_Rounded_MT/*.{ttf,woff,woff2}",
  ],
  theme: {
    fontFamily:{
      arial : ['Arial Rounded MT'],

    fontWeight:{
      bold:'bold',
      }
    },
    
    extend: {
      colors: {
        'DDS-blue' : '#00B3E6', 
      }
    },
  },
  plugins: [],
}

