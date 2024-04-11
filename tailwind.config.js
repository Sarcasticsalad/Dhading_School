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
      
      'arial-rounded': ['"Arial Rounded MT"', 'sans-serif'],
    
    },
  
    extend: {
      colors: {
        'DDS-blue' : '#009DCA',
        'Card-blue' : '#DCEFF7',

      }
    },
  },
  plugins: [],
}

