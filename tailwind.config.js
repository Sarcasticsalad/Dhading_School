/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      
      'arialBold': ['Arial Rounded MT Bold', 'sans-serif'],
      'arialRegular' : ['Arial Rounded MT Regular', 'sans-serif'],
    
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

